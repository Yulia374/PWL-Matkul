@extends('layout.template')
@section('content')
<div class="container mt-3">
    <h2>Halaman Buku</h2>

    <div class="card">
  <div class="card-body">
    <div class="mb-2">
        <a href="{{ route('form-create') }}" class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="card-header">Daftar Produk</div>
    <table class="table table-bordered table-hover table-striped">
  <thead>
    <tr>
      <th scope="col" class="text-center">No</th>
      <th scope="col">Judul Buku</th>
      <th scope="col">Penulis</th>
      <th scope="col">Tahun Terbit</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($dataBuku as $item)
    <tr>
      <td scope="row" class="text-center">{{ $loop->iteration }}</td>
      <td>{{ $item->judul }}</td>
      <td>{{ $item->penulis }}</td>
      <td>{{ $item->tahun_terbit }}</td>
      <td>
        <button type="button" class="btn btn-danger btn-sm">Hapus</button>
        <button type="button" class="btn btn-warning btn-sm">Edit</button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
  </div>
</div>

</div>
@endsection