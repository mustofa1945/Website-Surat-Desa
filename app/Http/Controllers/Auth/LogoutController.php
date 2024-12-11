<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function handleLogout(){
        
        session()->forget('userId');
        Auth::logout();
        
        return redirect()->route('home');
    }
}
