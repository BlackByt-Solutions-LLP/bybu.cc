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
            'slug' => 'unique:users,slug',
            'email' => 'unique'
        ]);

        $user = Auth::user();

        $user->update($request->all());
        $user->save();

        return back()->withErrors($validator);
    }
}
