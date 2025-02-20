@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menampilkan Produk {{$produk->nama_produk}}</div>
                <div class="card-body">
                    <form action="{{ route('produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="">Nama Produk</label>
                        <input type="text" class="form-control" name="nama_produk" id="" value="{{ $produk->nama_produk}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Harga</label>
                        <input type="number" class="form-control" name="harga" id="" value="{{ $produk->harga}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Stok</label>
                        <input type="number" class="form-control" name="stok" id="" value="{{ $produk->stok}}" disabled>
                    </div>
                     <div class="form-group">
                        <label for="">Id kategori</label>
                        <input type="text" name="id_kategori" class="form-control" value="{{ $produk->kategori->nama_kategori}}" disabled>
                    </div><r>
                        <a  href="{{ route('produk.index') }}" type="submit" class="btn btn-primary mt-2">Simpan</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
