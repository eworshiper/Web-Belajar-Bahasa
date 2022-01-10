<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index()
    {
        return view('home', ['pages' => 'Home']);
    }

    public function register()
    {
        return view('registration.register', ['pages' => 'Daftar']);
    }

    public function daftar(Request $request)
    {
        $validatedData = $request->validate([
            'nama_lengkap' => 'required',
            'nama_pengguna' => 'required',
            'tanggal_lahir' => 'required',
            'nik' => 'required',
            'nohp' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required',
            'setujui_kebijakan' => 'accepted'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        // dd($validatedData);

        User::create($validatedData);
        return redirect('/Login')->with('success', 'Registrasi Berhasil Silahkan Login');
    }

    public function login()
    {
        return view('registration.login', ['pages' => 'Login']);
    }

    public function authenticate(Request $request)
    {

        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            if (auth()->user()->is_guru == 1) {
                $request->session()->regenerate();
                return redirect()->intended('/Home')->with('loginGuru', 'Berhasil Login Sebagai Guru');
            } else {
                $request->session()->regenerate();
                return redirect()->intended('/Home');
            }
        } else {
            return back()->with('loginError', 'Gagal Login Email atau Password Salah!');
        }

        // dd(Auth::attempt(['email' => $request->email, 'password' => $request->password]));
        
    }

    public function homeuser()
    {
        return view('homeuser', ['pages' => 'Home']);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}