<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function showhome(){
      return view('home');
    }
    public function showabout(){
      return view('about');  
    }
    public function showportfolio(){
      return view('portfolio');  
    }
    public function showservice(){
      return view('service') ; 
    }
}
