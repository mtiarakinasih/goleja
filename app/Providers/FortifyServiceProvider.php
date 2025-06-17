<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;


class FortifyServiceProvider extends ServiceProvider
{
    public function register(): void {}

    public function boot(): void
    {
        Fortify::registerView(fn () => view('auth.register'));
        Fortify::loginView(fn () => view('auth.login'));


        Fortify::authenticateUsing(function ($request) {
            \Log::info('Fortify login trigger: '.$request->email);

            $user = User::where('email', $request->email)->first();

            if ($user && Hash::check($request->password, $user->password)) {
                if ($user->status === 'pending') {
                    \Log::warning('Login blocked: pending user '.$user->email);
                    throw ValidationException::withMessages([
                        'email' => 'Akun Anda sedang dalam proses verifikasi oleh admin.',
                    ]);
                }

                if ($user->status === 'rejected') {
                    \Log::warning('Login blocked: rejected user '.$user->email);
                    throw ValidationException::withMessages([
                        'email' => 'Akun Anda telah ditolak oleh admin.',
                    ]);
                }

                return $user;
            }

            return null;
        });     
    }
}
