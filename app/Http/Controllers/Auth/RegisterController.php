<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\Auth\RegisterService;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public $RegisterService;
    public function __construct(RegisterService $service)
    {
        $this->RegisterService = $service;
    }

    public function ViewRegister()
    {
        return view('pages.auth.form-register');
    }

    public function handleRegister(Request $request)
    {

        //Cek Apakah Data Susah Sesuai dengan Regex yang telah di set
        $validator = $this->RegisterService->validate($request->input());
        $validator->validate();
        
        $Create = $this->RegisterService->create($request->input());

        //Kembali ke halaman Sebelumnya
        return redirect()->back()->with('success', 'Registrasi berhasil! Silakan login.');

    }
}
