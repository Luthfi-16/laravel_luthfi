@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data</div>
                <div class="card-body">
                    <form action="{{ route('telepon.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Nomor Telepon</label>
                        <input type="text" class="form-control" name="nomor" id="" required>
                    </div>
                     <div class="form-group">
                        <label for="">Id pengguna</label>
                        <select name="id_pengguna" class="form-control">
                            @foreach($pengguna as $data)
                                <option value="{{ $data->id}} ">{{ $data->nama}} </option>
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
