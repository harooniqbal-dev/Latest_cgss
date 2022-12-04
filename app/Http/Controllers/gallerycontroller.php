<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Title; 
use App\gallery;
class GalleryController extends Controller
{   


    public function title(Request $request) {
        $title_ob=new Title();
        $title_ob->Title=$request->input('title');
        $save=$title_ob->save();
        if($save){
            return redirect()->route('addimage')->with('message', 'Title is successfully created.');
    }
}
    //
    public function index()
    {
         $title=Title::all();
        $data_array=[];
        foreach ($title as $key => $title) {
            $data=$title->gallery;
            array_push($data_array,$data);
        };
        $data_title=Title::all();
        return view('gallery',compact('data_array','data_title'));
    }
    public function adminView()
    {
        $data=gallery::all();
        return view('admin/gallery/index')->with('data',$data);
    }
    public function create()
    {
         $gtitle=Title::all();
        return view('admin/gallery/create',compact('gtitle'));
    }
    public function store(Request $request)
    {   $request->validate([
            'event' => 'required',
            'image' => 'required',
        ]);
        if( $request->event== "choose..."){
            return redirect()->route('addimage')->with('message', 'please select title');
        }

        $alumni = new gallery();
        
        
        if($request->hasfile('image')){

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' .$extension;
            $file->move('upload/gallery/', $filename);
            $alumni->photo = $filename;
            $alumni->title_id=$request->event;

        }
        else{
            return $request;
            $alumni->photo ='';
        }
        $alumni->save();
        return redirect('gallery')->with('message', 'Record is successfully created.');
       }
    
}
