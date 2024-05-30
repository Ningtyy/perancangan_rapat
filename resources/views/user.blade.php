@extends('layouts.app')

@section('title', 'User')

@section('judul')
  <strong>Daftar User</strong>
@endsection

@section('content')
    <a class="btn btn-primary" href="/user/tambah" role="button">Tambah Pengguna</a>
    <nav class="navbar bg-body-tertiary float-right">
    <div class="container-fluid">
        <form class="d-flex" method="GET" action="/cariuser">
        <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
    </nav>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Id Pengguna</th>
                <th scope="col">Nama</th>
                <th scope="col">NPP</th>
                <th scope="col">Email</th>
                <th scope="col">Nomor</th>
                <th scope="col">Bagian</th>
                <th scope="col">Akses</th>
                <th scope="col">Password</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $no => $u)
                <tr>
                    <th scope="row">{{ $user -> firstitem() + $no }}</th>
                    <td>{{ $u -> id_pengguna }}</td>
                    <td>{{ $u -> nama }}</td>
                    <td>{{ $u -> npp }}</td>
                    <td>{{ $u -> email }}</td>
                    <td>{{ $u -> nomor }}</td>
                    <td>{{ $u -> bagian }}</td>
                    <td>{{ $u -> akses }}</td>
                    <td>{{ $u -> password }}</td>
                    <td>
                        <a href="/user/hapus/{{ $u -> id }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <span class="float-right">{{ $user -> links() }}</span>
@endsection
