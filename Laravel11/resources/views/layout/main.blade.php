<!doctype html>
<html lang="en">

<head>
  <title>Utama</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</head>

<body class="bg-dark">

  <div class="container-fluid bg-dark">
    <div class="dropdown float-right">
      <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="false">
        <i class="bi bi-person-square"></i> {{ Auth::user()->nama ?? '' }}
      </button>
      <div class="dropdown-menu dropdown-menu-right" arie-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="/user">Data Pengguna</a>
        <a class="dropdown-item" href="/logout">Sign Out</a>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 bg-dark py-4"></div>
    </div>
    <div class="row">
      <div class="col-lg-2 vb-100">
        <div class="nav flex-column nav-pills mt-4 bg-dark" role="tablist" aria-orientation="vertical">
          <a class="nav-link rounded-0 p-2 {{ ($cek === 'home') ? 'active':'' }}" style="color:#ffffff;" href="/home">Home</a>
          <a class="nav-link rounded-0 p-2 {{ ($cek === 'dosen') ? 'active':'' }}" style="color:#ffffff;" href="/dosen">Dosen</a>
          <a class="nav-link rounded-0 p-2 {{ ($cek === 'mhs') ? 'active':'' }}" style="color:#ffffff;" href="/mhs">Mahasiswa</a>
          <a class="nav-link rounded-0 p-2 {{ ($cek === 'matkul') ? 'active':'' }}" style="color:#ffffff;" href="#v-pills-settings">Mata Kuliah</a>
        </div>
      </div>
      @yield('content')
    </div>
  </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>

</html>