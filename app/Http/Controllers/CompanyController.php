<?php

namespace App\Http\Controllers;

use App\Company;
use App\CompanyProductUser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    public function companyRegister(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validate->fails()) {
            return response()->json(['success' => false, 'data' => [], 'msg' => $validate->errors()]);
        }
        //find the companies of present user user
        $userUser = User::find(auth('api')->user()->id)->first();
        $userCompanies = Company::whereHas('users', function ($query) use ($userUser) {
            $query->where('user_id', $userUser->id);
        })->get();

        // Check if any company has multiple primary company; is_parent set to 1
        foreach ($userCompanies as $company) {
            if ($company->is_parent && $request->is_parent == 1) {
                return response()->json(['success' => false, 'data' => [], 'msg' => 'You have already defined a parent company']);
            }
        }

        $result = Company::create($request->all());
        if ($result) {
            //Assign company and user in m-to-m relation
            $result->users()->attach(auth('api')->user()->id);
            //If company form contain product id then it will insert into company_product pivot table
            if ($request->has('product_id')) {
                $result->products()->attach($request->product_id);
            }
            //update users table with a user to company assign for parent if is_parent and not have value then default update users
            if ($userUser->company_id === null) {
                User::where('id', auth('api')->user()->id)->update(['company_id' => $result->id]);
            }
            if ($result->is_parent == 1) {
                User::where('id', auth('api')->user()->id)->update(['company_id' => $result->id, 'is_super_admin' => 1]);
            }
            $result->load('country', 'industry');
            return response()->json(['success' => true, 'data' => $result, 'msg' => []]);
        }
        return response()->json(['success' => false, 'data' => [], 'msg' => 'Something went wrong']);
    }

    public function getCompanyCount()
    {
        $user = auth('api')->user();
        $userData = [
            'id' => $user->id,
            'email' => $user->email,
            'company' => [], // Initialize an empty array for companies
        ];

        $companies = CompanyProductUser::with('company')->select('company_id')
            ->where('user_id', $user->id)
            ->groupBy('company_id')
            ->get();
        $companyCount = count($companies);
        foreach ($companies as $company) {
            $companyData = [
                'id' => $company->company->id,
                'name' => $company->company->name,
                'industry_id' => $company->company->industry_id,
                'products' => [], // Initialize an empty array for products
            ];

            $products = CompanyProductUser::with('product')
                ->where('user_id', $user->id)
                ->where('company_id', $company->company->id)
                ->get();

            foreach ($products as $product) {
                if ($product->product) {
                    $companyData['products'][] = [
                        'id' => $product->product->id ?? null,
                        'name' => $product->product->name ?? null,
                    ];
                }

            }

            $userData['company'][] = $companyData; // Append company data
        }
        $userData['count'] = $companyCount;
        return response()->json(['success' => true, 'data' => $userData, 'msg' => []]);
    }
}
