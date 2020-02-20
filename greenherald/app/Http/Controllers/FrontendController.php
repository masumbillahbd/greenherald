<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
    	return view('frontEnd.home.homeContent');
    }

    public function admin(){
    	return view('admin.master');
    }

}
