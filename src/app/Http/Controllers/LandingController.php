<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    
    public function index(){
        return view('landing.index');
    }

    public function checkout(){
        return view('landing.checkout');
    }
<<<<<<< HEAD

    public function checkoutsupra(){
        return view('landing.checkoutsupra');
    }
=======
   
>>>>>>> 94e3dc6544f1060b3b769bcc272f8a598fdde172
}
