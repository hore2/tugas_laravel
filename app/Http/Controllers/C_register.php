<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_register extends Controller
{
    // membuat public
     public function form()
	    {
	    	return view('register');
		}
	public function sapa(Request $request)
	    {
	    	//dd($request->all());
	    	$fnama =$request["fnama"];
	    	return view('welcometest',["nama"=>$fnama]/*compact("fnama")*/);
		}
}
