<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class packagesController extends Controller
{
    public function index()
    {
        $packages=DB::table('packages')->get();
        return view('packages',['packages'=>$packages]);
    }
}
