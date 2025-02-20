@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menampilkan Buku {{$buku->nama_buku}} </div>
                <div class="card-body">
                    <form action="{{ route('buku.update', $buku->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="">Nama Buku</label>
                        <input type="text" class="form-control" name="nama_buku" id=""  value="{{$buku->nama_buku}}"  disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Genre Buku</label>
                        <input type="text" class="form-control" name="genre_buku" id=""  value="{{$buku->genre_buku}}"  disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Harga</label>
                        <input type="number" class="form-control" name="harga" id=""  value="{{$buku->harga}}"  disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Stok</label>
                        <input type="number" class="form-control" name="stok" id=""  value="{{$buku->stok}}"  disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Penerbit</label>
                        <input type="text" class="form-control" name="penerbit" id=""  value="{{$buku->penerbit}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Terbit</label>
                        <input type="date" class="form-control" name="tanggal_penerbit" id=""  value="{{$buku->tanggal_penerbit}}"  disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Foto Buku</label><br>
                        <img src="{{ asset('storage/buku/' . $buku->foto) }}" alt="" style="width: 100px;">
                    </div>
                    <r>
                        <a href="{{ route('buku.index') }}" class="btn btn-primary mt-2">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
