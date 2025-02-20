@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tampilkan Data {{$pengguna->nama}}</div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama" id="" value="{{ $pengguna->nama }}" disabled>
                    </div><r>
                        <a href="{{ route('pengguna.index') }}" class="btn btn-primary mt-2">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection