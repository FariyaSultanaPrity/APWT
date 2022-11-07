<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $message = "Welcome";
        return view('hello')->with('message', $message);
    }

    
}
