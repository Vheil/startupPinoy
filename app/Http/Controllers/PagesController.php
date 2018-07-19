<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function addnewuser(){
    	return view('pages.addnewuser');
    }
}
