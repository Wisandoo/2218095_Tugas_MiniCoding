@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tambah Pengguna</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('penggunas.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>

                            <div class="form-group">
                                <label for="no_hp">Nomor HP</label>
                                <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                            </div>

                            <!-- Tambahkan formulir untuk bidang lainnya -->

                            <button type="submit" class="btn btn-primary">Tambah Pengguna</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
