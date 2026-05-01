@extends('layout.template')

@section('content')
<div class="container mt-3">
    <h1>Detail Buku</h1>

   <div class="card">
    <div class="card-header">Detail Data Buku</div>
    <div class="card-body">
        <p>Judul Buku: {{ $detailBuku->judul }} </p>
        <p>Penulis: {{ $detailBuku->penulis }} </p>
        <p>Tahun Terbit: {{ $detailBuku->tahun_terbit }} </p>
    </div>
   </div>
</div>
@endsection