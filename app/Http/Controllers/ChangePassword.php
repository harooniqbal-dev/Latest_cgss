<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class ChangePassword extends Controller
{

    public function create()
    {
       return view('cha_pass');
    }
   public function Change_Passward(Request $request)
   {
    $validatedData = $request->validate([
        'oldpswd' => 'required',
        'password' => 'required|min:8',
        'password_confirmation' => 'required_with:password|same:password|min:6',
    ]);
    if (Auth::check()) {
        $data=User::find(Auth::id());
        $hashedPassword=$data->password;
        if (Hash::check($request->oldpswd, $hashedPassword))
{
    $data->password=Hash::make($request->password);
    $save=$data->save();
    if($save){
        return redirect('CGSS_Admin')->with('message', 'The Password has been changed.');
    }
}
    }
   }
}
