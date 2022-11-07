<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function login(){
        return view('User.login');
    }
    
    public function loginSubmit(Request $request){

        $validate = $request->validate([
            "User_Email"=>"required",
            'Password'=>'required'
            
        ]
        
    );
        $user = User::where('U_Email',$request->User_Email)
                            ->where('U_Pass',$request->Password)
                            ->first();
                           
    
        if($user){
            $request->session()->put('user',$user->U_Name);
            return redirect()->route('dash');
        }
        return back();
    }
    public function Logout(){
        session()->forget('user');
       
        return redirect()->route('login');
    }

    
}
