@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Obat</div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <a href="{{ route('obat.create') }}" class="btn btn-outline-primary mb-3">Tambah</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Obat</th>
                                    <th>Jenis obat</th>
                                    <th>Tanggal Kadaluwarsa</th>
                                    <th>Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($obat as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama_obat }}</td>
                                        <td>{{ $data->jenis_obat }}</td>
                                        <td>{{ $data->tgl_kadaluarsa }}</td>
                                        <td>Rp.{{ number_format($data->harga, 0, ',', '.') }}</td>
                                        <td>
                                            <form action="{{ route('obat.destroy', $data->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('obat.edit', $data->id) }}"
                                                    class="btn btn-success">Edit</a>
                                                <a href="{{ route('obat.show', $data->id) }}"
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
