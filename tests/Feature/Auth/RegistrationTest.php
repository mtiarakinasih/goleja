<?php

test('registration screen can be rendered', function () {
    $response = $this->get('/register');

    $response->assertStatus(200);
});

test('new users can register', function () {
    $response = $this->post('/register', [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'password' => 'password',
        'password_confirmation' => 'password',
        'role' => 'pelamar', // pelamar login otomatis
    ]);

    $this->assertAuthenticated(); // ✅ karena pelamar langsung login
    $response->assertRedirect(route('dashboard', absolute: false));
});

test('new perusahaan users can register but are not logged in', function () {
    $response = $this->post('/register', [
        'name' => 'PT Contoh',
        'email' => 'perusahaan@example.com',
        'password' => 'password',
        'password_confirmation' => 'password',
        'role' => 'perusahaan',
    ]);

    $this->assertGuest(); // karena status perusahaan masih pending
    $response->assertRedirect(route('login', absolute: false));
});

