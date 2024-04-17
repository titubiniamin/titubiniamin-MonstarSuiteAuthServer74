<?php

namespace App\Http\Controllers;

use App\Country;
use App\Industry;
use App\Product;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function countries()
    {
        $countries = Country::orderBy('name', 'asc')->get();
        return response()->json(['success' => true, 'data' => $countries, 'msg' => []]);
    }
    public function industries()
    {
        $countries = Industry::orderBy('name', 'asc')->get();
        return response()->json(['success' => true, 'data' => $countries, 'msg' => []]);
    }
    public function products()
    {
        $products = Product::with('subProducts')->orderBy('id', 'asc')->get();
        return response()->json(['success' => true, 'data' => $products, 'msg' => []]);
    }
}
