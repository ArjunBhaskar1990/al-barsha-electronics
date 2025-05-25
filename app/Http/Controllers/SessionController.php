<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{

    public function login()
    {

        return view('login');
    }

    public function store(Request $request)
    {

        $validation =  $request->validate([
            'name' => 'required',
            'password' => 'required|min:8'
        ]);

        if (Auth::attempt($validation)) {

            $request->session()->regenerate();

            return redirect()->route('page.dashboard');

        }else{

            throw ValidationException::withMessages([
                    'name' => "Those credentials doesnot match !!"
            ]);
        }
    }
}
