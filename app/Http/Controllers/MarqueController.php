<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\marque;

class MarqueController extends Controller

{
    public function index()
    {
    	$data = marque::find(1);
    	return view('marquee',compact('data'));
    	
    }
    public function edit(Request $request)
    {   $data1 = marque::find(1);
    	$data1->Description=$request->input('editor1');
    	$data1->Active = $request->input('marquee');
    	$data1->save();
    	$data = marque::find(1);
    	return redirect('marquee');

    }
}
