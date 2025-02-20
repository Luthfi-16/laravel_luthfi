@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data</div>
                <div class="card-body">
                    <form action="{{ route('obat.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Obat</label>
                        <input type="text" class="form-control" name="nama_obat" id="" required>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Obat</label><br>
                        <input type="text" name="jenis_obat" class="form-control" id="" required>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Kadaluwarsa</label>
                        <input type="date" class="form-control" name="tgl_kadaluarsa" id="" required>
                    </div>
                    <div class="form-group">
                        <label for="">Harga</label>
                        <input type="number" class="form-control" name="harga" id="" required>
                    </div><r>
                        <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
