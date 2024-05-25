<!-- resources/views/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">Data pengguna di database.</p>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pengguna</h6>
            <a href="{{ route('penggunas.create') }}" class="btn btn-primary">Tambah Pengguna</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID NIK</th>
                            <th>Nama</th>
                            <th>No HP</th>
                            <th>Jenis Kelamin</th>
                            <th>Email</th>
                            <th>Kota</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($penggunas as $pengguna)
                        <tr>
                            <td>{{ $pengguna->ID_NIK }}</td>
                            <td>{{ $pengguna->Nama }}</td>
                            <td>{{ $pengguna->No_HP }}</td>
                            <td>{{ $pengguna->Jenis_Kelamin }}</td>
                            <td>{{ $pengguna->Email }}</td>
                            <td>{{ $pengguna->Kota }}</td>
                            <td>
                                <a href="{{ route('penggunas.edit', $pengguna->ID_NIK) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('penggunas.destroy', $pengguna->ID_NIK) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
