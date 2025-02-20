@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Registrasi</div>
                <div class="card-body">
                    <form action="{{ route('registrasi.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap" id="" required>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label><br>
                        <input type="radio" class="form-check-input" name="jenis_kelamin" id="" value="Laki-Laki">Laki-Laki
                        <input type="radio" class="form-check-input" name="jenis_kelamin" id="" value="Perempuan">Perempuan
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir" id="" required>
                    </div>
                    <div class="form-group">
                        <label for="">Agama</label>
                        <select class="form-control" name="agama" id="">
                            <option value="">>--- Pilih Agama ---<</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Katolik">Katolik</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Asal Sekolah</label>
                        <input type="text" class="form-control" name="asal_sekolah" id="" required>
                    </div><r>
                        <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
