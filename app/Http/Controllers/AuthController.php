<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserData;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function processLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = UserData::where('email', $request->email)->first();

        if (!$user) {
            return back()->with('error', 'Email tidak ditemukan')->withInput();
        }

        if (!Hash::check($request->password, $user->password)) {
            return back()->with('error', 'Password salah')->withInput();
        }

        session([
            'user_id' => $user->id,
            'user_nama' => $user->nama,
            'user_email' => $user->email
        ]);

        return redirect('/')->with('success', 'Login berhasil');
    }

    public function register()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'email' => 'required|email|unique:user_data,email',
            'password' => 'required|min:6',
            'jenis_kelamin' => 'required',
            'layanan_favorit' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required'
        ]);

        UserData::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'jenis_kelamin' => $request->jenis_kelamin,
            'layanan_favorit' => $request->layanan_favorit,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
        ]);

        return redirect('/login')->with('success', 'Pendaftaran berhasil, silakan login.');
    }

    public function logout()
    {
        session()->flush();
        return redirect('/')->with('success', 'Berhasil logout.');
    }
}