@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tampilkan Data {{$pembeli->nama}}</div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama" id="" value="{{ $pembeli->nama_pembeli }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <input type="text" class="form-control" name="nama" id="" value="{{ $pembeli->jenis_kelamin }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Telepon</label>
                        <input type="text" class="form-control" name="nama" id="" value="{{ $pembeli->telepon }}" disabled>
                    </div><r>
                        <a href="{{ route('pembeli.index') }}" class="btn btn-primary mt-2">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection