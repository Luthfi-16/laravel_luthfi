@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Buku {{$buku->nama_buku}}</div>
                <div class="card-body">
                    <form action="{{ route('buku.update', $buku->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="">Nama Buku</label>
                        <input type="text" class="form-control  @error('nama_buku') is-invalid @enderror" name="nama_buku" id="" value="{{$buku->nama_buku}}">
                        @error('nama_buku')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Genre Buku</label>
                        <input type="text" class="form-control  @error('genre_buku') is-invalid @enderror" name="genre_buku" id="" value="{{$buku->genre_buku}}">
                        @error('genre_buku')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Harga</label>
                        <input type="number" class="form-control  @error('harga') is-invalid @enderror" name="harga" id="" value="{{$buku->harga}}">
                        @error('harga')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Stok</label>
                        <input type="number" class="form-control  @error('stok') is-invalid @enderror" name="stok" id="" value="{{$buku->stok}}">
                        @error('stok')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Penerbit</label>
                        <input type="text" class="form-control  @error('penerbit') is-invalid @enderror" name="penerbit" id="" value="{{$buku->penerbit}}">
                        @error('penerbit')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Terbit</label>
                        <input type="date" class="form-control  @error('tanggal_penerbit') is-invalid @enderror" name="tanggal_penerbit" id="" value="{{$buku->tanggal_penerbit}}">
                        @error('tanggal_penerbit')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Ganti Foto</label><br>

                        <img src="{{ asset('storage/buku/'.$buku->foto) }}" alt="" style="width: 100px; height: 100px;">
                        <input type="file" class="form-control  @error('foto') is-invalid @enderror" name="foto" id="" >

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
