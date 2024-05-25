<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function showDashboard()
    {
        return view('Pasien.dashboard-user');
    }
    
    public function showLogin()
    {
        return view('Pasien.login-user');
    }
    
    public function showRegister()
    {
        return view('Pasien.register-user');
    }

    public function edit($id)
    {
        $pasien = Pasien::findOrFail($id);
        return view('Pasien.edit', compact('pasien'));
    }

}

