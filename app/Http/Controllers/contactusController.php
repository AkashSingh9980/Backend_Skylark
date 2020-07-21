<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\contactus;

class contactusController extends Controller
{
 
    public function store(Request $request)
    {
        //Validate the request
        //request variables are the ```name``` of the fields in blade 
         $contact = new contactus;
         $contact->name=$request->visitor_name;
         $contact->email=$request->visitor_email;
         $contact->subject=$request->visitor_subject;
         $contact->message=$request->visitor_message;
         $contact->save();
         return redirect('contact')->with('status','Thank You!');
    }
}
