@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menampilkan Transaksi</div>
                <div class="card-body">
                    <form action="{{ route('transaksi.update', $transaksi->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="">Tanggal transaksi</label>
                        <input type="date" class="form-control" name="nama_transaksi" id="" value="{{ $transaksi->tanggal_transaksi }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Jumlah</label>
                        <input type="number" class="form-control" name="harga" id="" value="{{ $transaksi->jumlah }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Id Obat</label>
                        <input type="text" class="form-control" name="stok" id="" value="{{ $transaksi->obat->nama_obat}}" disabled>
                    </div>
                     <div class="form-group">
                        <label for="">Id Pembeli</label>
                        <input type="text" name="id_pembeli" class="form-control" value="{{ $transaksi->pembeli->nama_pembeli}}" disabled>
                    </div><r>
                        <a  href="{{ route('transaksi.index') }}" type="submit" class="btn btn-primary mt-2">Simpan</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
