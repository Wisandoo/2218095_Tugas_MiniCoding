@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Pasien</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('pasien.update', $pasien->id) }}">
                            @csrf
                            @method('PUT')

                            <!-- Isi formulir dengan bidang yang ingin diubah -->
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="{{ $pasien->nama }}">
                            </div>

                            <div class="form-group">
                                <label for="no_hp">Nomor HP</label>
                                <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $pasien->no_hp }}">
                            </div>

                            <!-- Tambahkan formulir untuk bidang lainnya -->

                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
