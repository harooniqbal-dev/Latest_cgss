<?php
namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Event;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Eventcontroller extends Controller{
	
	public function index(){
		$data = Event::all();
		return view('events')->with('data',$data);
	}
	
	public function store(Request $request ){


		$message = ['ename.required'=>'Event Name is required','event_date.required'=>'Event Date is required','eshort.required'=>'Event Short description is required'];
		$request->validate([
    'ename' => 'required',
    'event_date' => 'required',
    'eshort' => 'required',
    'elong' => 'required',
    'image' =>'required'

],$message);
		$data = new Event();
		$data->event_name = $request->input('ename');
		$data->event_date = $request->input('event_date');
		$data->event_short = $request->input('eshort');
		$data->event_description = $request->input('elong');
		if($request->hasfile('image')){

			$file = $request->file('image');
			$extension = $file->getClientOriginalExtension();
			$filename = time() . '.' .$extension;
			$file->move('upload/events/', $filename);
			$data->event_image = $filename;

		}
		else{
			return $request;
			$data->image ='';
		}
		$data->save();
		return redirect('evententry')->withSuccess('Data Saved');


	}
	public function update(Request $request,$id){
		$message = ['euname.required'=>'Event Name is required','event_dateu.required'=>'Event Date is required','eushort.required'=>'Event Short description is required'];
		$request->validate([
    'euname' => 'required',
    'event_dateu' => 'required',
    'eushort' => 'required'

],$message);
		$data = Event::find($id);
		$data->event_name = $request->input('euname');
		$data->event_date = $request->input('event_dateu');
		$data->event_short = $request->input('eushort');
		$data->event_description = $request->input('eulong');
		if($request->hasfile('uimage')){

			$file = $request->file('uimage');
			$extension = $file->getClientOriginalExtension();
			$filename = time() . '.' .$extension;
			$file->move('upload/events/', $filename);
			$data->event_image = $filename;

		}
		else{
			return $request;
			$data->image ='';
		}
		$data->save();
		return redirect('evententry')->withSuccess('Data Updated');

	}
	public function deleteevent($id){
		$data = Event::find($id);
		$data->delete();
		return redirect('evententry')->withSuccess('Data Deleted');

	}
	public function display(){
		$data = Event::all();
		return view('evententry',compact('data'));
	}
	public function eventmore($id){
		$data2 = Event::find($id);
		return view('eventmore')->with('data2',$data2);
	}
}

?>