@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Produk</div>
                <div class="card-body">
                    <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Produk</label>
                        <input type="text" class="form-control" name="nama_produk" id="" required>
                    </div>
                    <div class="form-group">
                        <label for="">Harga</label>
                        <input type="number" class="form-control" name="harga" id="" required>
                    </div>
                    <div class="form-group">
                        <label for="">Stok</label>
                        <input type="number" class="form-control" name="stok" id="" required>
                    </div>
                     <div class="form-group">
                        <label for="">Id kategori</label>
                        <select name="id_kategori" class="form-control">
                            @foreach($kategori as $data)
                                <option value="{{ $data->id}} ">{{ $data->nama_kategori}} </option>
                            @endforeach
                        </select>
                    </div><r>
                        <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
