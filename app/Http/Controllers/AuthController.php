<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authenticate()
    {

        $validated = request()->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (auth()->attempt($validated)) {
            request()->session()->regenerate();

            return redirect()->route('dashboard')->with('success', 'Login Berhasil!');
        }

        return redirect()->route('login')->withErrors([
            'password' => 'Email dan Password tidak ditemukan!!'
        ]);
    }

    public function logout()
    {
        auth()->logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Logout Berhasil!');
    }

    public function register()
    {

        return view('auth.register');
    }

    public function store()
    {
        // Validasi data request yang masuk
        $validated = request()->validate([
            'name' => 'required|min:3|max:40',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
        ]);

        Log::info('Validasi berhasil', ['data' => $validated]);

        // Cek apakah nama ada di model Alumni
        $alumni = Alumni::where('name', $validated['name'])->first();

        if ($alumni) {
            // Jika record alumni ditemukan, ambil ID-nya
            $alumniId = $alumni->id;
            Log::info('Alumni ditemukan', ['alumni_id' => $alumniId]);

            // Buat record User baru dengan alumni_id
            User::create([
                'name' => $validated['name'],
                'alumni_id' => $alumniId, // Gunakan ID alumni dari record yang ditemukan
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
            ]);

            Log::info('User berhasil dibuat', ['user' => $validated['name']]);

            // Redirect ke route yang diinginkan setelah registrasi berhasil
            return redirect()->route('register.show')->with('success', 'Registrasi berhasil.');
        } else {
            // Jika tidak ditemukan alumni, kirimkan pesan error dan redirect kembali
            Log::warning('Data alumni tidak ditemukan', ['name' => $validated['name']]);

            return redirect()->back()->withErrors(['name' => 'Data alumni tidak ditemukan.']);
        }
    }

    public function show()
    {
        return view('auth.confirm');
    }
}
