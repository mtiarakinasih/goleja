<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class FortifyServiceProvider extends ServiceProvider
{
    public function register(): void {}

    public function boot(): void
    {
        Fortify::registerView(fn () => view('auth.register'));
        Fortify::loginView(fn () => view('auth.login'));

        Fortify::createUsersUsing(function (array $input) {
            Validator::make($input, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'role' => ['required', 'in:perusahaan,pelamar'], // kita tambahkan pilihan role
            ])->validate();

            // Insert ke users
            $user = User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
                'role' => $input['role'],
                'status' => 'pending',
            ]);

            // Insert ke perusahaan atau pelamar
            if ($input['role'] == 'perusahaan') {
                \App\Models\Perusahaan::create([
                    'user_id' => $user->id,
                    'nama_perusahaan' => $input['name'],
                    'email' => $input['email'],
                ]);
            } else {
                \App\Models\Pelamar::create([
                    'user_id' => $user->id,
                    'nama_lengkap' => $input['name'],
                    'email' => $input['email'],
                ]);
            }

            return $user;
        });
    }
}
