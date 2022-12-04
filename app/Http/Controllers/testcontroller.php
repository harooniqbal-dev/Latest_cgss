<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\sargoda;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Testcontroller extends Controller{
	
	public function index(){
		return view('alumnitest');
	}
	public function store(Request $request){
		$sar = new sargoda();
		$sar->name = $request->input('name');
		$sar->email = $request->input('email');
		$sar->post = $request->input('post');
		if($request->hasfile('image')){
			$file = $request->file('image');
			$extension = $file->getClientOriginalExtension();
			$filename = time() . '.' .$extension;
			$file->move('upload/alumni/', $filename);
			$sar->image = $filename;

		}
		else{
			return $request;
			$sar->image ='';
		}
		$sar->save();
		return view('alumnitest')->with('alumnitest',$sar);
}
// public function view(){
// 	return view('testview');
// }
public function show(){
	$sargodas = sargoda::all();
	return view('testview')->with('sargodas',$sargodas);
}
}

?>