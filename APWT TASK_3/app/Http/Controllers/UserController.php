<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Address;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registration(){
        return view('registration');
    } 

    public function registrationSubmitted(Request $request){
        $validate = $request->validate([
            "U_Name"=>"required|min:5|max:30",
            "Localaddress"=>"required|max:100",
            "PoliceStation"=>"required|max:20",
            "City"=>"required|max:20",
            "Country"=>"required|max:20",
            "ZipCode"=>"required|max:20",
            "U_Email"=>"required",
            "U_Pass"=>"required|alpha_num",
            "U_Phn"=>"required|regex:/^([0-9\s\-\+\(\)]*)$/",
            "U_Dob"=>"required",
            "U_Gender"=>"required",
            "U_Photo"=>"required",       
            "cpassword"=>"same:U_Pass"
        ]
    );
    $address = new  Address();
    $address->Localaddress= $request->Localaddress;
    $address->PoliceStation= $request->PoliceStation;
    $address->City= $request->City;
    $address->Country= $request->Country;
    $address->ZipCode= $request->ZipCode;
        
    $address->save();
    
    $address=Address::orderBy('id', 'desc')->first();
    $user = new  User();
    $user->U_Name = $request->U_Name;
    $user->U_AddressId = $address->id;
    $user->U_Email = $request->U_Email;
    $user->U_Pass = $request->U_Pass;
    $user->U_Phn = $request->U_Phn;
    $user->U_Dob = $request->U_Dob;
    $user->U_Gender = $request->U_Gender;
    $request->U_Photo->store('U_Photo', 'public');
    $user->U_Photo=$request->U_Photo->hashName();
    $user->save();
    
       
       
    
    
    return redirect()->route('login');
       
    }
}
