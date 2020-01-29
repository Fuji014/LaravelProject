<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontDashboardController extends Controller
{
    public function dashboard(){
    	return view('front.index');
    }
}
