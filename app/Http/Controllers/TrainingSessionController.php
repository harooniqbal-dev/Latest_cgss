<?php

namespace App\Http\Controllers;
use App\TrainingSession;
use Illuminate\Http\Request;


class TrainingSessionController extends Controller
{
    public function index()
    {
        $data=TrainingSession::all()->sortByDesc('year');
        return view('tra_session',compact('data'));
    }
   
   
}
