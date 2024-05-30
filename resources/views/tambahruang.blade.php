@extends('layouts.app')

@section('title', 'Tambah Ruang Rapat')

@section('judul')
  <strong>Tambah Ruang Rapat</strong>
@endsection

@section('content')
    <form action="/ruang/simpan" method="POST" class="pt-2 pb-2">
        @csrf
        <div class="mb-3">
            <label for="id_ruang" class="form-label">Id Ruang</label>
            <input type="text" class="form-control" name="id_ruang" placeholder="masukkan id ruang">
        </div>
        <div class="mb-3">
            <label for="namaruang" class="form-label">Ruang Rapat</label>
            <input type="text" class="form-control" name="namaruang" placeholder="masukkan nama ruang">
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary float-right" value="Tambah">
        </div>
    </form>

@endsection