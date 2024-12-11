<?php
namespace App\Services\Validation;

use Illuminate\Support\Facades\Validator;

class BaseValidation
{
    public function handleValidation(array $data)
    {
        $makeValidator = Validator::make($data, [
            'username' => [
                'required',
                'string',
                'max:255',
                'regex:/^[a-zA-Z0-9_]+$/', // Hanya berisi huruf dan angka
            ],
            'email' => [
                'required',
                'email', // Validasi email standar
                'max:255',
                'unique:users,email'
            ],
            'password' => [
                'required',
                'string',
                'min:8', // Panjang minimal (opsional karena sudah diatur oleh regex)
                'regex:/^[A-Z][A-Za-z0-9]{7,}$/', // Regex validasi
            ],
            'phone_number' => [
                'required',
            ],
            'address' => [
                'required',
                'string',
                'max:500', // Maksimal 500 karakter
            ],
            'jabatan' => [
                'required',
                'string',
            ],
        ],[
            'username.regex' => 'Hanya meginzinkan huruf dan angka',
            'password.regex' => 'ex : Aa_123'
        ]);

        return $makeValidator->validate();
    }
}

?>