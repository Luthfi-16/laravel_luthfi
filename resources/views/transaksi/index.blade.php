@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Transaksi</div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <a href="{{ route('transaksi.create') }}" class="btn btn-outline-primary mb-3">Tambah</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal transaksi</th>
                                    <th>Jumlah</th>
                                    <th>Total</th>
                                    <th>Nama Obat</th>
                                    <th>Nama Pembeli</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($transaksi as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->tanggal_transaksi }}</td>
                                        <td>{{ $data->jumlah }}</td>
                                        <td>Rp.{{ number_format($data->total, 0, ',', '.') }}</td>
                                        <td>{{ $data->obat->nama_obat }}</td>
                                        <td>{{ $data->pembeli->nama_pembeli }}</td>
                                        <td>
                                            <form action="{{ route('transaksi.destroy', $data->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('transaksi.edit', $data->id) }}"
                                                    class="btn btn-success">Edit</a>
                                                <a href="{{ route('transaksi.show', $data->id) }}"
                                                    class="btn btn-warning">Show</a>
                                                <button class="btn btn-danger" type="submit"  onclick="return confirm('Apakah Anda Yakin?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
