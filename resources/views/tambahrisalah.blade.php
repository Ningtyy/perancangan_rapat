@extends('layouts.app')

@section('title', 'Tambah Risalah Rapat')

@section('judul')
  <strong>Tambah Risalah Rapat</strong>
@endsection
  
@section('content')
    <form action="risalah/simpan" class="row g-3" method="POST">
        @csrf
        <div class="col-md-6">
            <label for="id_rapat" class="form-label">Nomor Rapat</label>
            <input type="text" class="form-control" name="id_rapat" value="{{ $rapat -> id_rapat }}">
        </div>
        <div class="col-md-6">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" name="tanggal" value="{{ $rapat -> tanggal }}">
        </div>
        <div class="col-md-6">
            <label for="waktu" class="form-label">Waktu</label>
            <input type="time" class="form-control" name="waktu" value="{{ $rapat -> waktu }}">
        </div>
        <div class="col-md-6">
            <label for="pimpinan" class="form-label">Pimpinan</label>
            <input type="text" class="form-control" name="pimpinan" value="{{ $rapat -> pimpinan }}">
        </div>
        <div class="col-md-6">
            <label for="jabatan_pimpinan" class="form-label">Jabatan pimpinan</label>
            <input type="text" class="form-control" name="jabatan_pimpinan" value="{{ $rapat -> jabatan_pimpinan }}">
        </div>
        <div class="col-md-6">
            <label for="inisiator" class="form-label">Inisiator</label>
            <input type="text" class="form-control" name="inisiator" value="{{ $rapat -> inisiator }}">
        </div>
        <div class="col-md-6">
            <label for="notulis" class="form-label">Notulis</label>
            <input type="text" class="form-control" name="notulis" value="{{ $rapat -> notulis }}">
        </div>
        <div class="col-md-12">
            <label for="acara" class="form-label">Acara</label>
            <input type="text" class="form-control" name="notulis" value="{{ $rapat -> acara }}">
        </div>

        <div class="col-md-6">
            <label for="id_rapat" class="form-label">Nomor Risalah</label>
            <input type="text" class="form-control" name="id_risalah">
        </div>
        <div class="col-md-12">
            <label for="acara" class="form-label">Hasil</label>
            <textarea class="form-control" name="hasil" rows="3"></textarea>
        </div>
        <div class="col-md-12">
            <label for="dokumentasi" class="form-label">Masukkan foto dokumentasi rapat</label>
            <input class="form-control" type="file" name="document1" required>
            <input class="form-control" type="file" name="document2" required>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Tambah Risalah</button>
        </div>
    </form>
@endsection
