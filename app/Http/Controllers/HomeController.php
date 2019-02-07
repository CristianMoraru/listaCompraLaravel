<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function getHome()
    {
    	# code...
    	return redirect()->action('ProductoController@getIndex');
    }
}
