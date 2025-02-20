@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tampilkan Data {{$obat->nama}}</div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="">Nama Obat</label>
                        <input type="text" class="form-control" name="nama" id="" value="{{ $obat->nama_obat }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <input type="text" class="form-control" name="nama" id="" value="{{ $obat->jenis_obat }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Kadaluwarsa</label>
                        <input type="date" class="form-control" name="nama" id="" value="{{ $obat->tgl_kadaluarsa }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Harga Obat</label>
                        <input type="text" class="form-control" name="nama" id="" value="Rp.{{ number_format($obat->harga, 0, ',', '.') }}" disabled>
                    </div><r>
                        <a href="{{ route('obat.index') }}" class="btn btn-primary mt-2">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection