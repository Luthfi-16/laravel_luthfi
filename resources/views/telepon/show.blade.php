@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menampilkan Data Telepon</div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="">Nomor Telepon</label>
                        <input type="text" class="form-control" name="nama" id="" value="{{ $telepon->nomor }}" disabled>
                        <label for="">Id Pengguna</label>
                        <input type="text" class="form-control" name="nama" id="" value="{{ $telepon->pengguna->nama }}" disabled>
                    </div><r>
                        <a href="{{ route('telepon.index') }}" class="btn btn-primary mt-2">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection