<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Pelamar;
use App\Models\Perusahaan;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Inertia\Response;

class RegisteredUserController extends Controller
{
    public function create(): Response
    {
        return Inertia::render('auth/Register');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|lowercase|email|max:255|unique:users,email',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => 'required|in:perusahaan,pelamar',
        ]);

        // Simpan user ke tabel users
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'status' => 'pending',
        ]);

        // Simpan ke tabel pelamars atau perusahaans
        if ($request->role === 'pelamar') {
            Pelamar::create([
                'user_id' => $user->id,
                'nama_lengkap' => $request->name,
                'email' => $request->email,
            ]);
        } else {
            Perusahaan::create([
                'user_id' => $user->id,
                'nama_perusahaan' => $request->name,
                'email' => $request->email,
            ]);
        }

        event(new Registered($user));
        Auth::login($user);

        return to_route('dashboard');
    }
}
