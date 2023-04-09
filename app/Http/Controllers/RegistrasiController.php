<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistrasiRequest;
use App\Models\User;

class RegistrasiController extends Controller
{
    public function show()
    {
        return view('auth.register');
    }
    public function register(RegistrasiRequest $request) 
    {
        $user = User::create($request->validated());

        auth()->login($user);

        return redirect('/')->with('success', "Account successfully registered.");
    }
}
