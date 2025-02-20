@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tampilkan Data {{$kategori->nama_kategori}}</div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama_kategori" id="" value="{{ $kategori->nama_kategori }}" disabled>
                    </div><r>
                        <a href="{{ route('kategori.index') }}" class="btn btn-primary mt-2">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection