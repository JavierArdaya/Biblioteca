<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\PERSONA;

class RegisterController extends Controller
{
    //
    public function show()
    {
        return view('auth.register');
    }
    public function register(RegisterRequest $request)
    {
        $user = PERSONA::create($request->validated());
        return redirect('/login')->with('success', 'Account created successfully');
    }
}
