<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
     public function register()
	    {
	    	
	    	return view('register');
		}
	public function welcome()
	    {
	    	
	    	/*$fname = $request["fname"];
	    	//$lnama = $request["lnama"];*/
	    	return view('welcometest'/*,compact("email")*/);
	    }
}
