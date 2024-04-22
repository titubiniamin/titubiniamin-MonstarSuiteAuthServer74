<?php

namespace App\Http\Controllers;

use App\CompanyProductUser;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function productPurchase(Request $request)
    {
        $userId = auth('api')->user()->id;
        $validate = Validator::make($request->all(), [
            'product_id' => 'required',
            'company_id' => 'required|exists:companies,id'
        ]);
        $errors = $validate->errors()->all();
        $msg = $errors[0] ?? '';
        $msg .= $errors[1] ?? '';
        $msg .= $errors[2] ?? '';
        if ($validate->fails()) {
            return response()->json(['success' => false, 'data' => [], 'msg' => $msg]);
        }
        $data = $request->all();
        $data['user_id'] = auth('api')->user()->id;

        $checkExistingData = CompanyProductUser::where('user_id', $data['user_id'])
            ->where('company_id', $data['company_id'])
            ->get();
//        $query = CompanyProductUser::query();


        $checkNullProduct = CompanyProductUser::where('user_id', $data['user_id'])
            ->where('company_id', $data['company_id'])
            ->whereNull('product_id')
            ->first();
//        if there is product_id null then update with the value
        if ($checkNullProduct !== null) {
            $result = CompanyProductUser::where('id', $checkNullProduct->id)
                ->update(['product_id' => $data['product_id']]);
            if ($result > 0) {
                return response()->json(['success' => true, 'data' => '', 'msg' => 'Operation Successfull']);
            }
        }

        $checkExistingData = CompanyProductUser::where('user_id', $data['user_id'])
            ->where('company_id', $data['company_id'])
            ->get();
        if (count($checkExistingData) > 0) {
            return response()->json(['success' => false, 'data' => '', 'msg' => 'Already data is present']);
        } else {
            $result = CompanyProductUser::create($data);
            if ($result) {
                return response()->json(['success' => true, 'data' => [$result], 'msg' => []]);
            }
        }


//        return 'hold';

        return response()->json(['success' => false, 'data' => [], 'msg' => ['Something went wrong']]);
    }

    public function getProducts()
    {
        $user = Auth::guard('api')->user();

        $userData = [
            'id' => $user->id,
            'email' => $user->email,
            'company' => []
        ];

        $companies = CompanyProductUser::select('company_id')
            ->where('user_id', $user->id)
            ->groupBy('company_id')
            ->with('company')
            ->get();
        //if no company found then return only user info
        if (count($companies) < 1) {
            return \response()->json(['success' => true, 'data' => $userData, 'msg' => []]);
        }

        foreach ($companies as $company) {
            $companyData = [
                'id' => $company->company->id,
                'name' => $company->company->name,
                'industry_id' => $company->company->industry_id,
                'products' => []
            ];

            $products = CompanyProductUser::where('company_id', $company->company->id)
                ->where('user_id', $user->id)
                ->with('product')
                ->get();

            foreach ($products as $product) {
                if ($product->product) {
                    $companyData['products'][] = [
                        'id' => $product->product->id,
                        'name' => $product->product->name
                    ];
                }
            }
            $userData['company'][] = $companyData;
        }


//        $user = $userUser->load('companies.industry', 'companies.products');

        return Response::json(['success' => true, 'data' => $userData, 'msg' => []]);
    }

    public function getProductsDefault()
    {
        $authUser = Auth::guard('api')->user();
        //find the default product which will be shows in front page always;
        $defaultProductsId = [1, 2, 3, 4];
        $defaultProducts = Product::whereIn('id', $defaultProductsId)->get();
        //find the company which has MonstarPeople. Because here we will show in front which company has People purchased
        $defaultPeoplePurchasedCompany = CompanyProductUser::where('user_id', $authUser->id)
            ->where('product_id', 1)
            ->first();
        //If no company purchased Prople product then only default products will be shown
        if ($defaultPeoplePurchasedCompany === null) {
            foreach ($defaultProducts as $defaultProduct) {
                $data['name'] = $defaultProduct->name;
                $data['logo'] = str_replace(' ', '', $defaultProduct->name);
                $data['description'] = $defaultProduct->description;
                $data['access'] = false;
                $data['colorcode'] = "suiteorange";
                $result[] = $data;
            }
            return response()->json(['success' => true, 'data' => $result, 'msg' => []]);
        }
        //If company has purchased People then do the following. here just taken company_id which have purchased people. $defaultForCompanyProducts contains purchased products;
        $defaultForCompanyProducts = CompanyProductUser::where('user_id', $authUser->id)
            ->where('company_id', $defaultPeoplePurchasedCompany->company_id)
            ->get();

        foreach ($defaultProducts as $product) {
            //check the specific company has the default product
            $productStatus = $defaultForCompanyProducts->contains('product_id', $product->id) ? 'true' : 'false';
            $companyArray[] = [
                'id' => $product->id,
                'name' => $product->name,
                'logo' => str_replace(' ', '', $product->name),
                'access' => $productStatus == 'false' ? false : true,
                'colorcode' => "suiteorange",
                'description' => $product->description,
            ];
        }

        $companiesArray[] = $companyArray;
//        }

// Output the array of companies with default products and statuses
        return response()->json(['success' => true, 'data' => $companyArray, 'msg' => []]);

    }
}
