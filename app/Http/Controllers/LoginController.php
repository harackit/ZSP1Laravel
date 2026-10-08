<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function showLogin ()
    {
        return view('login');
    }

    public function login (Request $request)
    {
        $validated_data = $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'required|string'
        ]);

        if(Auth::attempt($validated_data)) {
            $request->session()->regenerate();

            return redirect()->route('admin-panel');
        }

        throw ValidationException::withMessages(['dane' => 'Niepoprawny użytkownik i/lub hasło']);
    }

    public function wyloguj (Request $request) 
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('show.login');
    }
}
