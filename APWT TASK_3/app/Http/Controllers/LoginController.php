<?php

namespace App\Http\Controllers;
use App\Models\User;
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
            $request->session()->put('email',$user->U_Email);
            $request->session()->put('phone',$user->U_Phn);
            $request->session()->put('dob',$user->U_Dob);
            $request->session()->put('gender',$user->U_Gender);
            $request->session()->put('address',$user->U_Adress);
            $request->session()->put('U_Id',$user->U_Id);

            return redirect()->route('dash');
        }
        return back();
    }
    public function Logout(){
        session()->forget('user');
       
        return redirect()->route('login');
    }

    
}
