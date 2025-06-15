<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class MakeAdminUserCommand extends Command
{
    protected $signature = 'make:admin-user';
    protected $description = 'Create a new user with role admin';

    public function handle(): int
    {
        $name = $this->ask('Name');
        $email = $this->ask('Email');

        // Cek email sudah ada belum
        if (User::where('email', $email)->exists()) {
            $this->error("Email $email sudah digunakan.");
            return self::FAILURE;
        }

        $password = $this->secret('Password');

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password),
            'role' => 'admin', // ⬅️ langsung isi kolom role
            'status' => 'approved', // ⬅️ langsung isi kolom status
        ]);

        $this->info("Admin user created: {$user->email}");
        return self::SUCCESS;
    }
}
