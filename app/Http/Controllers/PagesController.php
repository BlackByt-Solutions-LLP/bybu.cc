<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function setting(){
        return view('pages.setting');
    }

    public function dashboard(){
        return view('pages.dashboard');
    }

    public function welcome(){
        return view('welcome');
    }

    
    
    

}
