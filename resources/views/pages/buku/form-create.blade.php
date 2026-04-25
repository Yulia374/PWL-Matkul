@extends('layout.template')
@section('content')
<div class="container mt-3">
   <div class="card">
    <div class="card-header">Form Tambah Buku</div>
    <div class="card-body">

    <form method="POST" action="{{ route('store') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Judul Buku</label>
            <input type="text" class="form-control" name="judul">
            @error('judul')
            <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Penulis</label>
            <input type="text" class="form-control" name="penulis">
            @error('penulis')
            <div class="form-text text-danger">{{ $message }}</div>
            @enderror        
        </div>

        <div class="mb-3">
            <label class="form-label">Tahun Terbit</label>
            <input type="text" class="form-control" name="tahun_terbit">
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