<?php

namespace App\Services\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterService
{

    /**
     * Fungsi untuk memvalidasi data registrasi pengguna
     */
    public function validate(array $data)
    {
        return Validator::make($data, [
            'username' => ['required', 'string', 'max:255',],
            'phone_number' => ['required'],
            'address' => ['required'],
            'departement' => ['required']
        ]);
    }

    /**
     * Fungsi untuk membuat user baru setelah validasi berhasil
     */
    public function create(array $data)
    {
        $user = User::create([
            'name' => $data['username'],
            'phone_number' => $data['phone_number'],
            'address' => $data['address'],
            'departement' => $data['departement']
        ]);

        Auth::login($user);

        Log::info('User created successfully', ['user_id' => $user->id]);

        return true;

    }
}
