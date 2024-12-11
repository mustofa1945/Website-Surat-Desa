<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Services\Auth\LoginService;
use App\Http\Controllers\Controller;
use App\Services\Auth\RegisterService;

class RegisterController extends Controller
{
    public $RegisterService;

    
    public function __construct(RegisterService $service )
    {
        $this->RegisterService = $service;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.auth.form-register');
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $Create = $this->RegisterService->create($request->input());

    if ($Create) {

            return redirect()->route('daftar-digides.index')->with('success', 'Registrasi berhasil! Silakan login.');

        } else {

            return redirect()->back()->with('error', 'Gagal Registrasi');
            
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
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
