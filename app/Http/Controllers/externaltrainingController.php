<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TrainingSession;

class externaltrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data=TrainingSession::all();
        // return $data;
        return view('admin/external_training/index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/external_training/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'year' => 'required',
            'level' => 'required | max:150',
            
            ]);
        
        $ob=new TrainingSession();
        $ob->year=$request->year;
        $ob->teacher=$request->teacher;
        $ob->subject=$request->subject;
        $ob->level=$request->level;
        $save=$ob->save();
        if($save){
            return redirect()->route('external_training.index')->with('message', 'Record is successfully created.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //====================================================
        //   this function delete the external training data
        //====================================================
        $data = TrainingSession::find($id);
        $del=$data->delete();
        if($del){
            return redirect()->route('external_training.index')->with('message', 'The record has been successfully deleted.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=TrainingSession::find($id);
        return view('admin/external_training/edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data=TrainingSession::find($id);
        $data->year=$request->year;
        $data->teacher=$request->teacher;
        $data->subject=$request->subject;
        $data->level=$request->level;
        $save=$data->save();
        if($save){
            return redirect()->route('external_training.index')->with('message', 'Record changed succsssfully.');
        }

    }

  
  
}
