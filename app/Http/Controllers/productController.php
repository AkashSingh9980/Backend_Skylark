<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class productController extends Controller
{

    public function index()
    {
        $products=DB::table('products')->get();

        return view('product',['products'=>$products]);
    }
}
