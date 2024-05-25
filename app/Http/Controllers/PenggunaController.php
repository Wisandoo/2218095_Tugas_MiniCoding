<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index()
    {
        $penggunas = Pengguna::all();
        return view('Pasien.index', compact('penggunas'));
    }

    public function create()
    {
        return view('Pasien.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nama' => 'required',
            'No_HP' => 'required',
            'Jenis_Kelamin' => 'required',
            'Email' => 'required|email|unique:tb_pengguna',
            'Kota' => 'required',
            'password' => 'required',
        ]);

        $pengguna = new Pengguna([
            'Nama' => $request->input('Nama'),
            'No_HP' => $request->input('No_HP'),
            'Jenis_Kelamin' => $request->input('Jenis_Kelamin'),
            'Email' => $request->input('Email'),
            'Kota' => $request->input('Kota'),
            'password' => bcrypt($request->input('password')),
        ]);
        $pengguna->save();

        return redirect('/penggunas')->with('success', 'Pengguna has been added');
    }

    public function edit($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        return view('Pasien.edit', compact('pengguna'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Nama' => 'required',
            'No_HP' => 'required',
            'Jenis_Kelamin' => 'required',
            'Email' => 'required|email|unique:tb_pengguna,Email,'.$id.',ID_NIK',
            'Kota' => 'required',
        ]);

        $pengguna = Pengguna::findOrFail($id);
        $pengguna->Nama = $request->input('Nama');
        $pengguna->No_HP = $request->input('No_HP');
        $pengguna->Jenis_Kelamin = $request->input('Jenis_Kelamin');
        $pengguna->Email = $request->input('Email');
        $pengguna->Kota = $request->input('Kota');
        if ($request->input('password')) {
            $pengguna->password = bcrypt($request->input('password'));
        }
        $pengguna->save();

        return redirect('/penggunas')->with('success', 'Pengguna has been updated');
    }

    public function destroy($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        $pengguna->delete();

        return redirect('/penggunas')->with('success', 'Pengguna has been deleted');
    }
}
