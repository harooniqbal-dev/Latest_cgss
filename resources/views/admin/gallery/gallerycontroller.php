<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gallery;
class GalleryController extends Controller
{
    //
    public function index()
    {
        $data=gallery::all();
        return view('gallery',compact('data'));
    }
    public function adminView()
    {
        $data=gallery::all();
        return view('admin/gallery/index')->with('data',$data);
    }
    public function create()
    {
        return view('admin/gallery/create');
    }
    public function store(Request $request)
    {
        $alumni = new gallery();
        $alumni->Event_name=$request->event;
        
        if($request->hasfile('image')){

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' .$extension;
            $file->move('upload/gallery/', $filename);
            $alumni->photo = $filename;

        }
        else{
            return $request;
            $alumni->photo ='';
        }
        $alumni->save();
        return redirect('gallery')->with('message', 'Record is successfully created.');
       }
    
}
