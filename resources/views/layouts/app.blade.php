<!doctype html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <div class="row">
          <div class="col-lg-2 vh-100 border mt-4">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <img src="{{ asset('storage/pdam.png') }}" alt="Gambar PDAM" style="max-width: 100%; max-height: 100%;">
                <a class="nav-link {{ ($key == 'ruangrapat') ? 'active' : '' }}" role="tab" href="/ruangrapat">Daftar Ruang Rapat</a>
                <a class="nav-link {{ ($key == 'rapat') ? 'active': '' }}" role="tab" href="/rapat">Daftar Rapat</a>
                <a class="nav-link {{ ($key == 'tambahrapat') ? 'active': '' }}" role="tab" href="tambahrapat">Tambah Rapat</a>
                <a class="nav-link {{ ($key == 'risalah') ? 'active': '' }}" role="tab" href="/risalah">Daftar Risalah</a>
                <a class="nav-link {{ ($key == 'tambahrisalah') ? 'active': '' }}" role="tab" href="tambahrisalah">Tambah Risalah</a>
                <a class="nav-link {{ ($key == 'user') ? 'active': '' }}" role="tab" href="/user">User</a>
            </div>
          </div>
          <div class="col-lg-10">
            <div class="card mt-4 vh 100">
              <div class="card-header">
                @yield('judul')
              </div>
              <div class="card-body">
                @yield('content')
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>