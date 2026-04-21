@extends('layout.template')
@section('content')
<div class="container mt-3">
    <h2>Selamat datang dihalaman produk kami</h2>

    <div class="card">
  <div class="card-body">
    <div class="mb-2">
        <button type="button" class="btn btn-primary">Tambah produk</button>
    </div>
    <div class="card-header">Daftar Produk</div>
    <table class="table table-bordered table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Harga</th>
      <th scope="col">Stok</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Laptop Asus</td>
      <td>18.000.000</td>
      <td>10</td>
      <td>
        <button type="button" class="btn btn-danger btn-sm">Hapus</button>
        <button type="button" class="btn btn-warning btn-sm">Edit</button>
      </td>
    </tr>
  </tbody>
</table>
  </div>
</div>

</div>
@endsection