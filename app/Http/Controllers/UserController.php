<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function updateAccount(Request $request)
    {
        $validated = $request->validate([
            'slug' => 'unique:users,slug'
        ]);

        $user = Auth::user();

        $user->update($request->all());

        return back();
    }

    public function updateAvatar(Request $request)
    {
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $filename = time() . $file->getClientOriginalName();
            $request->avatar->move(public_path('avatars'), $filename);
            Auth()->user()->update(['avatar' => $filename]);
        }
        return back();
    }
}
