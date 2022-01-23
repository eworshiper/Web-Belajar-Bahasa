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
            if (auth()->user()->is_admin == 1) {
                $request->session()->regenerate();
                return redirect()->intended('/Admin')->with('admin', 'Berhasil Login Sebagai Admin');
            } elseif (auth()->user()->is_guru == 1) {
                return redirect()->intended('/Guru')->with('guru', 'Berhasil Login Sebagai Guru');
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
        return view('user.homeuser', ['pages' => 'Home']);
    }

    public function pilih_kursus()
    {
        return view('user.pilihkursus', ['pages' => 'Pilih Kursus']);
    }

    public function profile()
    {
        return view('user.profile', ['pages' => 'Profile']);
    }

    public function profile_updates(Request $request)
    {
        $user = $request->post('id');
        $validatedData = $request->validate([
            'nama_pengguna' => 'required',
            'nohp' => 'required',
            'password' => 'required|confirmed'
        ]);

        $data = User::find($user);
        $data->nama_pengguna = $validatedData['nama_pengguna'];
        $data->nohp = $validatedData['nohp'];
        $data->password = Hash::make($validatedData['password']);
        $data->save();

        return redirect('/Profile')->with('success', 'Data Berhasil di Update!');
    }

    public function kursus(Request $request)
    {
        $selectedCourse = $request->get('Kursus');

        if ($selectedCourse === 'Inggris') {
            return view('user.kursus', ['pages' => 'Kursus Inggris (US)']);
        }
    }

    public function subcourse(Request $request)
    {
        $selectedCourse = $request->get('Kursus');
        $selectedSubCourse = $request->get('Sub-Course');

        if ($selectedCourse === 'Inggris') {
            if ($selectedSubCourse === 'Grammar') {
                return view('user.inggris.grammar', ['pages' => 'Kursus Inggris (US) - Grammar']);
            }
        }
    }

    public function videopembelajaran(Request $request)
    {
        $selectedCourse = $request->get('Kursus');
        $selectedSubCourse = $request->get('Sub-Course');

        if ($selectedCourse === 'Inggris') {
            if ($selectedSubCourse === 'Grammar') {
                return view('user.inggris.videopembelajaran', ['pages' => 'Kursus Inggris (US) - Grammar']);
            }
        }
    }

    public function latihansoal(Request $request)
    {
        $selectedCourse = $request->get('Kursus');
        $selectedSubCourse = $request->get('Sub-Course');

        if ($selectedCourse === 'Inggris') {
            if ($selectedSubCourse === 'Grammar') {
                return view('user.inggris.latihansoal', ['pages' => 'Kursus Inggris (US) - Grammar - Latihan Soal']);
            }
        }
    }

    public function result()
    {
        return view('user.inggris.result', ['pages' => 'Kursus Inggris (US) - Grammar - Result Latihan Soal']);
    }

    public function admin()
    {
        return view('admin.home', ['pages' => 'Home Admin']);
    }

    public function guru()
    {
        return view('guru.home', ['pages' => 'Home Guru']);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}