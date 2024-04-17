<?php

namespace App\Http\Controllers;

use App\CompanyProductUser;
use App\Models\Auth as AuthModel;
use App\Models\AuthProfile;
use App\User;
use App\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function signup(Request $request)
    {
        $rules = [
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed',
        ];

        $validator = Validator::make($request->all(), $rules);
        // Check if validation fails
        if ($validator->fails()) {
            return Response::json(['success' => false, 'data' => [], 'msg' => $validator->errors()]);
        }
        $user['name']=$request->name ?? '';
        $user['email'] = $request->email;
        $user['password'] = Hash::make($request->password);
        $user['is_active'] = 1;
        $result = User::Create($user);

        if ($result) {
            return Response::json(['success' => true, 'data' => [$result], 'msg' => 'Inserted data successfully']);
        }
        return Response::json(['success' => false, 'data' => [], 'msg' => 'Failed']);
    }

    public function logout()
    {
        $user=auth('api')->user()->token();
        $user->revoke();
        return response()->json(['success'=>true,'data'=>'','msg'=>'Logged out successfully']);

    }
    public function newUserCreate(Request $request)
    {
        $rules = [
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string',
        ];

        $validator = Validator::make($request->all(), $rules);
        // Check if validation fails
        if ($validator->fails()) {
            return Response::json(['success' => false, 'data' => [], 'msg' => $validator->errors()]);
        }

        $user['email'] = $request->email;
        $user['password'] = Hash::make($request->password);
        $user['is_active'] = 1;

        $result = User::Create($user);

        if ($result) {
            return Response::json(['success' => true, 'data' => [$result], 'msg' => 'Inserted data successfully']);
        }
        return Response::json(['success' => false, 'data' => [], 'msg' => 'Failed']);

    }

    public function userProfile(Request $request)
    {
        $userId = auth('api')->user()->id;
        $validator = Validator::make($request->all(), [
            'first_name' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'data' => [], 'msg' => $validator->errors()]);
        }
        $userProfile = $request->all();
        $userProfile['user_id'] = $userId;
//        return $userProfile;
        $result = UserProfile::create($userProfile);
        if ($result) {
            return response()->json(['success' => true, 'data' => $result, 'msg' => 'Profile Created Successfully']);
        }
        return response()->json(['success' => false, 'data' => [], 'msg' => 'Something went wrong']);
    }

    public function userAccessInfo()
    {
        $user = Auth::Guard('api')->user();
        $userData = [
            'id' => $user->id,
            'name' => $user->name,
            'company' => []
        ];
        $companies = CompanyProductUser::select('company_id')
            ->where('user_id', $user->id)
            ->with('company')
            ->groupBy('company_id')
            ->get();

        if (count($companies) < 1) {
            return response()->json(['success' => true, 'data' => $userData, 'msg' => 'No Company Found']);
        }

        foreach ($companies as $company) {
            $companyData = [
                'id' => $company->company->id,
                'name' => $company->company->name,
                'products' => []
            ];

            $products = CompanyProductUser::with('product')
                ->where('user_id', $user->id)
                ->where('company_id', $company->company->id)
                ->get();
            foreach($products as $product){
                if($product->product){
                    $companyData['products'][]=[
                        'id'=>$product->product->id,
                        'name'=>$product->product->name
                    ];
                }
            }

          $userData['company'][]=$companyData;
        }
        return response()->json(['success' => true, 'data' => $userData, 'msg' => []]);

    }
}
