<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class dashboardController extends Controller
{
    
    public function index()
    {
        $packages=DB::table('packages')->get();
        $products=DB::table('products')->get();
        $services=DB::table('services')->get();
        return view('dashboard',['packages'=>$packages,'products'=>$products,'services'=>$services]);
    }

    
}
