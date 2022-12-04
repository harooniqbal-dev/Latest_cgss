<?php
namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\alumni;
use App\Alumnip;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Alumnicontroller extends Controller{
	
	
	public function entry(){
		return view('alumnientry');
	}
	public function store(Request $request){
		$message = ['aname.required'=>'Name is required', 'description.required' => 'Description is Required', 'image.required' => 'Image is required'];
		$request->validate([
			'name' => 'required',
			
			'description' => 'required',
			'image' => 'required'
			],$message);
		$alumni = new alumni();
		$alumni->name = $request->input('name');
		$alumni->ocup = $request->input('ocup');
		$alumni->descrip = $request->input('description');
		if($request->hasfile('image')){

			$file = $request->file('image');
			$extension = $file->getClientOriginalExtension();
			$filename = time() . '.' .$extension;
			$file->move('upload/alumni/', $filename);
			$alumni->image = $filename;

		}
		else{
			return $request;
			$alumni->image ='';
		}
		$alumni->save();
		return redirect('alumniEntry')->withSuccess('Data Saved');
		


	}
	public function display(){
		$alumni = alumni::all();
		$dataplace = Alumnip::all();
		return view('alumni',compact('alumni','dataplace'));
	}
	public function index(){
		$alumni = alumni::all();
		return view('alumnientry')->with('alumni',$alumni);
	}
	public function update(Request $request,$id){
		$message = ['aname.required'=>'Name is required', 'description.required' => 'Description is Required', 'image.required' => 'Image is required'];
		$request->validate([
			'name' => 'required',
			
			'description' => 'required',
			'image' => 'required'
			],$message);
		$alumni = alumni::find($id);
		
		$alumni->name = $request->input('name');
		$alumni->ocup = $request->input('ocup');
		$alumni->descrip = $request->input('description');
		if($request->hasfile('image')){

			$file = $request->file('image');
			$extension = $file->getClientOriginalExtension();
			$filename = time() . '.' .$extension;
			$file->move('upload/alumni/', $filename);
			$alumni->image = $filename;

		}
		else{
			return $request;
			$alumni->image ='';
		}
		$alumni->save();
		return redirect('alumniEntry')->withSuccess('Data Updated');

	}
	public function delete($id){
		$alumni = alumni::find($id);
		$alumni->delete();
		return redirect('alumniEntry')->withSuccess('Data Deleted');
	}

}

?>