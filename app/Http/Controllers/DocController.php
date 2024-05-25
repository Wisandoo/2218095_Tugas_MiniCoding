<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DocController extends Controller
{
    public function index()
    {
        $Doc = Doctor::all();
        return view('Doctor.index', compact('Doctors'));
    }

    public function create()
    {
        return view('Doctor.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nama' => 'required',
            'No_HP' => 'required',
            'Jenis_Kelamin' => 'required',
            'Email' => 'required|email|unique:tb_dokter',
            'Kota' => 'required',
            'password' => 'required',
        ]);

        $Doc = new Doctor([
            'Nama' => $request->input('Nama'),
            'No_HP' => $request->input('No_HP'),
            'Jenis_Kelamin' => $request->input('Jenis_Kelamin'),
            'Email' => $request->input('Email'),
            'Kota' => $request->input('Kota'),
            'password' => bcrypt($request->input('password')),
        ]);
        $Doc->save();

        return redirect('/Doctor')->with('success', 'Doctor has been added');
    }

    public function edit($id)
    {
        $Doc = Doctor::findOrFail($id);
        return view('Doctor.edit', compact('doctor'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Nama' => 'required',
            'No_HP' => 'required',
            'Jenis_Kelamin' => 'required',
            'Email' => 'required|email|unique:tb_dokter,Email,'.$id.',ID_DOC',
            'Kota' => 'required',
        ]);

        $Doc = Doctor::findOrFail($id);
        $Doc->Nama = $request->input('Nama');
        $Doc->No_HP = $request->input('No_HP');
        $Doc->Jenis_Kelamin = $request->input('Jenis_Kelamin');
        $Doc->Email = $request->input('Email');
        $Doc->Kota = $request->input('Kota');
        if ($request->input('password')) {
            $Doc->password = bcrypt($request->input('password'));
        }
        $Doc->save();

        return redirect('/Doctor')->with('success', 'Doctor has been updated');
    }

    public function destroy($id)
    {
        $Doc = Doctor::findOrFail($id);
        $Doc->delete();

        return redirect('/Doctor')->with('success', 'Doctor has been deleted');
    }
}
