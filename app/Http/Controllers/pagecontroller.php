<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    public function showhome(){
        return view ('welcome');
    }

    public function showuse(){
        return view ('users');
    }
    
    public function showabout(){
        return view ('about');
    }
}
    