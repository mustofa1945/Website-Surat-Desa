<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Services\Auth\LoginService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public $LoginService;

    
    public function __construct(LoginService $loginService)
    {
        $this->LoginService = $loginService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.auth.Form-Login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $data)
    {
        $validate = $this->LoginService->handleValidation($data->input());

        $user = $this->LoginService->handleLogin($validate);


        if ($user) {
            return redirect()->route('dashboard.data-user');
        } else {
            return redirect()->back()->with('error', 'Username atau Password Yang ada Masukkan salah');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
