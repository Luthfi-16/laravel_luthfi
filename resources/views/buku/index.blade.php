@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Daftar Buku</div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <a href="{{ route('buku.create') }}" class="btn btn-outline-primary mb-3">Tambah</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Buku</th>
                                    <th>Genre</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Penerbit</th>
                                    <th>Tanggal Terbit</th>
                                    <th>Foto Buku</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($buku as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama_buku }}</td>
                                        <td>{{ $data->genre_buku }}</td>
                                        <td>Rp.{{ number_format($data->harga, 0, ',', '.') }}</td>
                                        <td>{{ $data->stok }}</td>
                                        <td>{{ $data->penerbit }}</td>
                                        <td>{{ $data->tanggal_penerbit }}</td>
                                        <td><img src="{{ asset('storage/buku/' . $data->foto) }}" alt="" style="width: 100px;"></td>
                                        <td>
                                            <form action="{{ route('buku.destroy', $data->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('buku.edit', $data->id) }}"
                                                    class="btn btn-success">Edit</a>
                                                <a href="{{ route('buku.show', $data->id) }}"
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
