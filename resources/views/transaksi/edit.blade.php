@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Transaksi</div>
                <div class="card-body">
                    <form action="{{ route('transaksi.update', $transaksi->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="">Tanggal Transaksi</label>
                        <input type="date" class="form-control" name="tanggal_transaksi" id="" value="{{ $transaksi->tanggal_transaksi }}" required>
                    </div>
                    <div class="form-group">
                        <label for="">Jumlah</label>
                        <input type="number" class="form-control" name="jumlah" id="" value="{{ $transaksi->jumlah}}" required>
                    </div>
                     <div class="form-group">
                        <label for="">Id Obat</label>
                        <select name="id_obat" class="form-control">
                            @foreach($obat as $data)
                                <option value="{{ $data->id}} "{{ $data->id == $transaksi->id_obat ? 'selected' : ''}}>{{ $data->nama_obat}} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Id Pembeli</label>
                        <select name="id_pembeli" class="form-control">
                            @foreach($pembeli as $data)
                                <option value="{{ $data->id}} "{{ $data->id == $transaksi->id_pembeli ? 'selected' : ''}}>{{ $data->nama_pembeli}} </option>
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
