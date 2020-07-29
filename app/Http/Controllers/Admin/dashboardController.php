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
        return view('dashboard/index',['packages'=>$packages,'products'=>$products,'services'=>$services]);
    }
    public function packagesIndex()
    {
        $packages=DB::table('packages')->get();
        return view('dashboard/packages',['packages'=>$packages]);
    }
    public function productsIndex()
    {
        $products=DB::table('products')->get();
        return view('dashboard/products',['products'=>$products]);
    }
    public function servicesIndex()
    {
        $services=DB::table('services')->get();
        return view('dashboard/services',['services'=>$services]);
    }
    public function packagesDestroy($id)
    {
        DB::table('packages')->where('id','=',$id)->delete();
        return response()->json(['success'=>"Package deleted succesfully",'tr'=>$id]);
    }
    public function packagesDeleteAll(Request $request)
    {
        $ids=$request->ids;
        //DB::table('packages')->whereIn('id',explode(",",$ids))->delete();
        return response()->json(['success'=>"Packages deleted succesfully"]);
    }

    
}
