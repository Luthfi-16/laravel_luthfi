@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Buku</div>
                <div class="card-body">
                    <form action="{{ route('buku.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Buku</label>
                        <input type="text" class="form-control @error('nama_buku') is-invalid @enderror" name="nama_buku" id="">
                        @error('nama_buku')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Genre Buku</label>
                        <input type="text" class="form-control @error('genre_buku') is-invalid @enderror" name="genre_buku" id="" >
                        @error('genre_buku')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Harga</label>
                        <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" id="" >
                        @error('harga')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Stok</label>
                        <input type="number" class="form-control @error('stok') is-invalid @enderror" name="stok" id="" >
                        @error('stok')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Penerbit</label>
                        <input type="text" class="form-control @error('penerbit') is-invalid @enderror" name="penerbit" id="">
                        @error('penerbit')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Terbit</label>
                        <input type="date" class="form-control @error('tanggal_penerbit') is-invalid @enderror" name="tanggal_penerbit" id="" >
                        @error('tanggal_penerbit')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Tambahkan Foto</label>
                        <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" id="" >
                        @error('foto')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
