<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class servicesController extends Controller
{
    
    public function index()
    {
        $services=DB::table('services')->get();

        return view('services',['services'=>$services]);
    }
}
