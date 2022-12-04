<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Contact;
use App\TrainingSession;
use App\Publication;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $total_message=Contact::where('view','false')->get()->count();
        $total_publication=Publication::all()->count();
        $total_Training=TrainingSession::all()->count();
        $new_message=Contact::where('id', 4)->first();
        return view('home',compact('total_message','total_publication','total_Training','new_message'));
    }
    
}
