<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function setting(){
        $user = Auth::user();
        return view('pages.setting', compact('user'));
    }

    public function dashboard(){
        $user = Auth::user();
        return view('pages.dashboard', compact('user'));
    }

    public function welcome(){
        return view('welcome');
    }

    
    
    

}
