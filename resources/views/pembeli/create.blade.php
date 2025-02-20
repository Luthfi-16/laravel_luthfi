@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data</div>
                <div class="card-body">
                    <form action="{{ route('pembeli.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Pembeli</label>
                        <input type="text" class="form-control" name="nama_pembeli" id="" required>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label><br>
                        <input type="radio" name="jenis_kelamin" value="Laki Laki" id="" required> Laki Laki
                        <input type="radio" name="jenis_kelamin" value="Perempuan" id="" required> Perempuan
                    </div>
                    <div class="form-group">
                        <label for="">Telepon</label>
                        <input type="text" class="form-control" name="telepon" id="" required>
                    </div><r>
                        <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
