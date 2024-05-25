<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('Pasien.register-user');
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $pengguna = $this->create($request->all());

        auth()->login($pengguna);

        return redirect()->route('Pasien.dashboard-user');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'NamaLengkap' => ['required', 'string', 'max:255'],
            'NoHP' => ['required', 'string', 'max:15'],
            'JK' => ['required', 'in:L,P'],
            'user-email' => ['required', 'string', 'email', 'max:255', 'unique:tb_pengguna,Email'],
            'Kota' => ['required', 'string', 'max:150'],
            'InputPassword' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        return Pengguna::create([
            'Nama' => $data['NamaLengkap'],
            'No_HP' => $data['NoHP'],
            'Jenis_Kelamin' => $data['JK'],
            'Email' => $data['user-email'],
            'Kota' => $data['Kota'],
            'password' => Hash::make($data['InputPassword']),
        ]);
    }
}
