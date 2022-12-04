<?php

namespace App\Http\Controllers;

use App\Alumnip;
use Illuminate\Http\Request;

class AlumniControllerP extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Alumnip::all();
        return view('admin/Alumni/index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/Alumni/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
     { //|regex:/^[\p{L}\s-]+$/u
        $request->validate([
            'student_name' => 'required',
            'placement' => 'required',
        ]);
       $save_data=new Alumnip();
       $save_data->student_name=$request->student_name;
       $save_data->placement=$request->placement;
       $save=$save_data->save();
       if($save){
           return redirect('AlumniPlacement')->with('message', 'Record is successfully created.');
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Alumnip::find($id);
        $del=$data->delete();
        if($del){
            return redirect()->route('alumni.index')->with('message', 'The record has been successfully deleted.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Alumnip::find($id);
        return view('admin/Alumni/edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'student_name' => 'required|regex:/^[\p{L}\s-]+$/u',
            'placement' => 'required',
        ]);
        $data = Alumnip::find($id);
        $data->student_name=$request->student_name;
        $data->placement=$request->placement;
        $save=$data->save();
        if($save){
            return redirect()->route('AlumniPlacement')->with('message', 'Record changed succsssfully.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumnip $Alumnip)
    {
        
        
    }
}
