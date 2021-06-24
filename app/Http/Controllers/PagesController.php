<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function calender(){
        return view('pages.calender');
    }

    public function dashboard(){
        return view('pages.dashboard');
    }

    public function team(){
        return view('pages.team');
    }
    
    public function project(){
        return view('pages.project');
    }

    public function welcome(){
        return view('welcome');
    }
    
    

}
