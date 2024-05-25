<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function showDashboard()
    {
        return view('Dokter.dashboard-dokter');
    }
    
    public function showLogin()
    {
        return view('Dokter.login-dokter');
    }

    public function showRegister()
    {
        return view('Dokter.register-dokter');
    }
}

