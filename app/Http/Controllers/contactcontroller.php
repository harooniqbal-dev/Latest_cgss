<?php

namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\StoreContactPost;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }
    public function submitcontact(StoreContactPost $request)
    {
        $request->validated();
        $con=new Contact;
        $con->contactor_name=$request->name;
        $con->contactor_email=$request->email;
        $con->subject=$request->subject;
        $con->message=$request->message;
        $con->view="false";
        $con->save();
        return back()->with('message','Your Message Is Successfully Submitted');
    }
    public function message()
    {
        // $data=Contact::all()->count();
        $data=Contact::all();
        return view('admin/messages/message',compact('data'));
    }
    public function deleteMessage($id)
    {
        $data=Contact::find($id);
        $del=$data->delete();
        if($del){
            return redirect()->route('message')->with('message', 'Your Message Is Successfully Deleted.');
        }
    }
    public function new_Message()
    {
    $data=Contact::where('view','false')->get();
       if($data){
        foreach ($data as $value){ 
            $value->view="true";
            $value->save();
          }
       }
        return view('admin/messages/newmessage',compact('data'));
    }
}
