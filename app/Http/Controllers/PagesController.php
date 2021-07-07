<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\User;
use App\Models\Layout;
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
        $links = Link::where('user_id', '=', $user->id)->get();
        return view('pages.dashboard', compact('user', 'links'));
    }

    public function allLayout()
    {
        $user = Auth::user();
        $layouts = Layout::all();
        $links = Link::where('user_id', '=', $user->id)->get();
        return view('pages.appearance', compact('user', 'layouts', 'links'));
    }
    public function updateLayout(Request $request){
        $user = Auth::user();
        $user->update($request->all());
        return back();
    }

    public function welcome(){
        return view('welcome');
    }

    public function profile(User $slug){
        return view('profile', compact('slug'));
    }
    

}
