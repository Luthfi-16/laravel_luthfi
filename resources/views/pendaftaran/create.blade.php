@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Tambah Pendaftaran</div>
                    <div class="card-body">
                        <form action="{{route('pendaftaran.store')}}" method="POST">
                            @csrf
                            <div class="mb-2">
                                <label for="">NIK</label>
                                <input type="text" name="nik" class="form-control" required>
                            </div>
                            <div class="mb-2">
                                <label for="">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" class="form-control" required>
                            </div>
                            <div class="mb-2">
                                <label for="">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="" class="form-control">
                                    <option value="Laki-Laki">Laki Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label for="">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control" required>
                            </div>
                            <div class="mb-2">
                                <label for="">Agama</label>
                                <select name="agama" id="" class="form-control">
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label for="">Alamat</label>
                                <textarea name="alamat" class="form-control" id="" cols="30" rows="10"></textarea>
                            </div>
                            <div class="mb-2">
                                <label for="">Asal Sekolah</label>
                                <input type="text" name="asal_sekolah" class="form-control" required>
                            </div>
                            <div class="div">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
