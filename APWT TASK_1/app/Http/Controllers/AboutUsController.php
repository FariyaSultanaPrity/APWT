<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function aboutUsView(){
        $about = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore iusto dolorum, ad architecto omnis suscipit ratione quibusdam similique facere et dolor cum consectetur ipsum exercitationem sint neque. Similique, velit reprehenderit.";
        return view('aboutUs')->with('about',$about);
    }
}
