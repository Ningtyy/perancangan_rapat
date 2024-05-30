@extends('layouts.app')

@section('title', 'Home')

@section('judul')
  <strong>Ruang Rapat</strong>
@endsection
  
@section('content')
  <h3>Daftar Ruang Rapat</h3>
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
        <th scope="col">Jadwal Rapat</th>
        </tr>
    </thead>
    <tbody>
      @foreach ($ruang as $no => $r)
        <tr>
        <th scope="row">{{ $ruang -> firstitem() + $no }}</th>
        <td>{{ $r-> id_ruang }}</td>
        <td>{{ $r -> ruangan }}</td>
        <td>
          ketersediaan
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
@endsection
