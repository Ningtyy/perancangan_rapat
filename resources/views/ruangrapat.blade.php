@extends('layouts.app')

@section('title', 'Home')

@section('judul')
  <strong>Ruang Rapat</strong>
@endsection
  
@section('content')
  <h3>Daftar Ruang Rapat</h3>
  <a class="btn btn-primary" href="/ruang/ketersediaan" role="button"> Lihat daftar ruang untuk rapat</a>
  <nav class="navbar bg-body-tertiary float-right">
    <div class="container-fluid">
        <form class="d-flex" method="GET" action="/cariruang">
          <input class="form-control mr-sm-2" name="cariruang" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
  </nav>
  <table class="table">
    <thead>
        <tr>
        <th scope="col">No.</th>
        <th scope="col">Id Ruang</th>
        <th scope="col">Ruangan</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
      @foreach ($ruang as $no => $r)
        <tr>
        <th scope="row">{{ $ruang -> firstitem() + $no }}</th>
        <td>{{ $r-> id_ruang }}</td>
        <td>{{ $r -> ruangan }}</td>
        <td>
          <a href="/ruang/edit/{{ $r -> id }}" class="btn btn-primary">Perbarui</a>
        </td>
        <td>
          <a href="/ruang/hapus/{{ $r -> id }}" class="btn btn-danger">Hapus</a>
        </td>
        </tr>
      @endforeach
    </tbody>
    </table>
    <nav aria-label="Page navigation example" class="float-right">
      <ul class="pagination">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
  <a class="btn btn-primary" href="/ruang/tambah" role="button"> Tambah Ruang</a>
@endsection
