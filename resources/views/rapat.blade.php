@extends('layouts.app')

@section('title', 'Daftar Rapat')

@section('judul')
  <strong>Daftar Rapat yang Tersedia</strong>
@endsection
  
@section('content')
  @foreach ($rapat as $r)
  <div class="card">
    <h5 class="card-header">Nomor Rapat: {{ $r -> id_rapat }}</h5>
    <div class="card-body">
      <h5 class="card-title">Acara Rapat: {{ $r -> acara }}</h5>
      <p class="card-text"><strong>Tanggal: </strong>{{ $r -> tanggal }} - Waktu: {{ $r -> waktu }}</p>
      <p class="card-text">Pimpinan Rapat: {{ $r -> pimpinan }} - Jabatan: {{ $r -> jabatan_pimpinan }}</p>
      <p class="card-text">Inisiator: {{ $r -> inisiator }} - Notulis: {{ $r -> notulis }}</p>
      <a href="#" class="btn btn-primary">Edit rapat</a>
      <a href="/tambahrisalah/{{$r -> id}}" class="btn btn-primary">Buat risalah</a>
    </div>
  </div>
  @endforeach
@endsection
