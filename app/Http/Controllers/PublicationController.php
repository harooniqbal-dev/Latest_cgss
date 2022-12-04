<?php

namespace App\Http\Controllers;

use App\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Publication::all();
        return view('admin/publications/index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return Publication::all();
        return view('admin/publications/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
         if ($request->hasFile('pdffile')) {
            if($request->pdffile->extension()=="pdf"){
                $file_name=$request->bookname.'.'.$request->pdffile->extension();
                $image_name=$request->bookname.'.'.$request->bookimage->extension();
                $ob=new Publication();
                $ob->Name=$request->bookname;
                $ob->photo=$image_name;
                $ob->filename=$file_name;
                $save=$ob->save();
            if($save){
                $request->file('pdffile')->move('upload/files/',$file_name);
                $request->file('bookimage')->move('upload/files/',$image_name);
                return redirect()->route('publications.index')->with('message', 'Record is successfully created.');
            }
            }
            else{
                return back()->with('message','Record is not created because only pdf file is allowed');  
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Publication::find($id);
        $del=$data->delete();
        if($del){
            return redirect()->route('publications.index')->with('message', 'The record has been successfully deleted.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Publication::find($id);
        return view('admin/publications/edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data=Publication::find($id);
        $bookname=$request->bookname;
        if($request->hasFile('pdffile')){
            $file_name=$bookname.'.'.$request->pdffile->extension();
            $data->filename=$file_name;
            $request->file('pdffile')->storeAs('Books', $file_name,'public');
        }
        if($request->hasFile('bookimage')){
            $image_name=$bookname.'.'.$request->bookimage->extension();
            $data->photo=$image_name;
            $request->file('bookimage')->storeAs('images',$image_name,'public');
        }
        $data->Name=$request->bookname;
        $save=$data->save();
        if($save){
            return redirect()->route('publications.index')->with('message', 'Record changed succsssfully.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
