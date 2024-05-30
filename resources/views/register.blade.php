@extends('layouts.app')

@section('title', 'Tambah Rapat')

@section('judul')
  <strong>Tambah Pengguna</strong>
@endsection
  
@section('content')
    <div class="card-body">
        <form action="/tambahuser" method="POST" autocomplete="off">
        @csrf
            <div class="form-group">
                <label for="">Id Pengguna</label>
                <input type="text" name="id_pengguna" class="form-control" autofocus required>
            </div>
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" name="nama" class="form-control" autofocus required>
            </div>
            <div class="form-group">
                <label for="">NPP</label>
                <input type="text" name="npp" class="form-control" autofocus required>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Nomor</label>
                <input type="text" name="nomor" class="form-control" autofocus required>
            </div>
            <div class="form-group">
                <label for="">Bagian</label>
                <input type="text" name="bagian" class="form-control" autofocus required autocomplete="off">
            </div>
            <div class="form-group">            
                <label for="akses">Akses:</label><br>
                <input type="radio" id="akses1" name="akses" value="1" required> Akses 1<br>
                <input type="radio" id="akses2" name="akses" value="2" required> Akses 2<br>
                <input type="radio" id="akses3" name="akses" value="3" required> Akses 3<br>
                <input type="radio" id="akses4" name="akses" value="4" required> Akses 4<br>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="pw" class="form-control" required>
            </div>
            <div class="form-group">
                <input name="" id="" class="btn btn-primary" type="submit" value="Tambah">
            </div>
        </form>
    </div>
@endsection
