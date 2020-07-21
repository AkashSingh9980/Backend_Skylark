<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\contactus;

class contactusController extends Controller
{
    
    public function store(Request $request)
    {
        //Validate the request
         $contact = new contactus;
         $contact->name=$request->name;
         $contact->save();
    }
}
