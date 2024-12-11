<?php

namespace App\Services\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Services\Validation\BaseValidation;
use Illuminate\Validation\ValidationException;

class RegisterService extends BaseValidation
{

    public function create(array $data)
    {
        $validated = parent::handleValidation($data);

        try {
            //Jika berhasil, data valid dikembalikan Dalam bentuk JSON
            $user = User::create([
                'name' => $data['username'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'phone_number' => $data['phone_number'],
                'address' => $data['address'],
                'departement' => Str::title(str_replace('_', ' ', $data['jabatan']))// Output: Wakil Desa
            ]);

            Auth::login($user);

            Log::info('User created successfully', ['user_id' => $user->id]);

          return response()->json([
                'success' => true,
                'data' => $validated
            ] , 200);


        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'data' => $e->errors(),
            ] , 400);
        }
    }
}
