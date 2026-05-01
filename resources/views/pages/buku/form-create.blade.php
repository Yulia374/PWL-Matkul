@extends('layout.template')
@section('content')
<div class="container mt-3">
    <h1>{{ isset($detailBuku)? 'Edit' : 'Tambah' }} Buku</h1>
   <div class="card">
    <div class="card-header">Form {{ isset($detailBuku)? 'Edit' : 'Tambah' }} Buku</div>
    <div class="card-body">

    <form method="POST" action="{{ isset($detailBuku)? route('update-buku', ['id' => $detailBuku->id]) : route('store') }}">
        @csrf
        @if (isset($detailBuku))
            @method('put')
        @endif
        
        <div class="mb-3">
            <label class="form-label">Judul Buku</label>
            <input type="text" class="form-control" name="judul" value="{{ old('judul', $detailBuku->judul ?? '') }}">
            @error('judul')
            <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Penulis</label>
            <input type="text" class="form-control" name="penulis" value="{{ old('penulis', $detailBuku->penulis ?? '') }}">
            @error('penulis')
            <div class="form-text text-danger">{{ $message }}</div>
            @enderror        
        </div>

        <div class="mb-3">
            <label class="form-label">Tahun Terbit</label>
            <input type="text" class="form-control" name="tahun_terbit" value="{{ old('tahun_terbit', $detailBuku->tahun_terbit ?? '') }}">
            @error('tahun_terbit')
            <div class="form-text text-danger">{{ $message }}</div>
            @enderror        
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    </div>
   </div>
</div>
@endsection