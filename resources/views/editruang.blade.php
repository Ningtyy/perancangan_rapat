@extends('layouts.app')

@section('title', 'Edit Ruang')

@section('judul')
  <strong>Edit Ruang Rapat</strong>
@endsection
  
@section('content')
    <form action="/ruang/update/{{$ruang -> id}}" method="POST" class="pt-2 pb-2">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="id_ruang" class="form-label">Id Ruang</label>
            <input type="text" class="form-control" name="id_ruang" value="{{ $ruang -> id_ruang  }}">
        </div>
        <div class="mb-3">
            <label for="namaruang" class="form-label">Ruang Rapat</label>
            <input type="text" class="form-control" name="namaruang" value="{{ $ruang -> ruangan  }}">
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary float-right" value="Simpan perubahan">
        </div>
    </form>
@endsection
