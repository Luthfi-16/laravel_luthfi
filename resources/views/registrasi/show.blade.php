@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Registrasi</div>
                <div class="card-body">
                    <form action="{{ route('registrasi.update', $registrasi->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap" id="" value="{{ $registrasi->nama_lengkap }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label><br>
                        <input type="text" class="form-control" name="jenis_kelamin" id="" value="{{ $registrasi->jenis_kelamin }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir" id="" value="{{ $registrasi->tanggal_lahir }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Agama</label>
                        <input type="text" class="form-control" name="agama" id="" value="{{ $registrasi->agama }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Asal Sekolah</label>
                        <input type="text" class="form-control" name="asal_sekolah" id="" value="{{ $registrasi->asal_sekolah }}" disabled>
                    </div><r>
                        <a href="{{ route('registrasi.index') }}" class="btn btn-primary mt-2">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
