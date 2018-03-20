<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request){
    	try{
    		$name = $request->name;
    		$phone = $request->phone;
    		$email = $request->email;
    		$message = $request->message;
    		\App\ContactUs::create(['name' => $name, 'mobile' => $phone, 'email' => $email, 'message' => $message]);
    		return response()->json('done');
    	}catch(Exception $e){

    	}
    }
}
