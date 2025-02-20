@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data {{ $pembeli->nama }}</div>
                <div class="card-body">
                    <form action="{{ route('pembeli.update', $pembeli->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="">Nama Pembeli</label>
                        <input type="text" class="form-control" name="nama_pembeli" id="" value="{{ $pembeli->nama_pembeli }}" required>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label><br>
                        <input type="radio" name="jenis_kelamin" value="Laki Laki" id="" @if($pembeli->jenis_kelamin == 'Laki Laki') checked @endif> Laki Laki
                        <input type="radio" name="jenis_kelamin" value="Perempuan" id="" @if($pembeli->jenis_kelamin == 'Perempuan') checked @endif> Perempuan
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Telepon</label>
                        <input type="text" class="form-control" name="telepon" id="" value="{{ $pembeli->telepon }}" required>
                    </div><r>
                        <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection