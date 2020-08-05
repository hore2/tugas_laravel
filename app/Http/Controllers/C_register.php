<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_register extends Controller
{
    // membuat public
     public function form()
	    {
	    	return view('form');
		}
	public function sapa()
	    {
	    	return view('sapa');
		}
}
