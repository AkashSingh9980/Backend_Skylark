<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\package;

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
    
    public function packagesDeleteAll(Request $request)
    {
        $ids=$request->ids;
       // DB::table('packages')->whereIn('id',explode(",",$ids))->delete();
        return response()->json(['success'=>"Packages deleted succesfully"]);
    }
    public function packagesInsert(Request $request)
    {
        $package = new package;
        $package->dataid=$request->inputItemId;
        $package->datatype=$request->inputItemDatatype;
        $package->title=$request->inputItemTitle;

        $package->price="₹" . $request->inputItemPrice;
        $package->header=$request->inputItemHeader;
        $package->description=$request->inputItemDescription;
        $package->save();
        return redirect('dashboard/packages')->with('insertStatus','Your package was succesfully added.');
    }
    public function packagesUpdate(Request $request)
    {
        $package=package::where('id','=',$request->editItemDBID);

        $package->dataid=$request->editItemId;
        $package->datatype=$request->editItemDatatype;
        $package->title=$request->editItemTitle;

        $package->price="₹" . $request->editItemPrice;
        $package->header=$request->editItemHeader;
        $package->description=$request->editItemDescription;
        DB::table('packages')->where('id',$request->editItemDBID)->update(['dataid'=>$request->editItemId,'datatype'=>$request->editItemDatatype,'title'=>$request->editItemTitle,'price'=>"₹" . $request->editItemPrice,'header'=>$request->editItemHeader,'description'=>$request->editItemDescription]);
        return redirect('dashboard/packages')->with('editStatus','Your package was succesfully edited.');
    }
    
}
