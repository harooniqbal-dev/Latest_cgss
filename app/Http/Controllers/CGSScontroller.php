<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\marque;

class CGSScontroller extends Controller
{
    //
    public function index(){

    	$data = marque::find(1);
        // dd($data);
    	return view('homecgss',compact('data'));
    }

}