@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Transaksi</div>
                <div class="card-body">
                    <form action="{{ route('transaksi.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Tanggal Transaksi</label>
                        <input type="date" class="form-control" name="tanggal_transaksi" id="" required>
                    </div>
                    <div class="form-group">
                        <label for="">Jumlah</label>
                        <input type="number" class="form-control" name="jumlah" id="" required>
                    </div>
                     <div class="form-group">
                        <label for="">Id Obat</label>
                        <select name="id_obat" class="form-control">
                            @foreach($obat as $data)
                                <option value="{{ $data->id}} ">{{ $data->nama_obat}} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Id Pembeli</label>
                        <select name="id_pembeli" class="form-control">
                            @foreach($pembeli as $data)
                                <option value="{{ $data->id}} ">{{ $data->nama_pembeli}} </option>
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
