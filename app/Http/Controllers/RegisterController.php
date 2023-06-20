<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [

        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);
        User::create($validateData);

        // $request->session()->flash('Berhasil', 'Registrasi Berhasil!, Silahkan Login');

        return redirect('/login')->with('Berhasil', 'Registrasi Berhasil!, Silahkan Login');
    }
}