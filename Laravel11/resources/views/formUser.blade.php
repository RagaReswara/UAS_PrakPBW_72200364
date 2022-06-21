@extends('layout.mainForm')
@section('title', 'Home')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<form action="/user/saveUser" method="POST" class="pt-2 pb-2">
    @csrf
    <div class="form-group w-200 bg-white">
        <label>NIK</label>
        <input type="number" name="nik" class="form-control" placeholder="Masukkan NIK" required>
    </div>

    <div class="form-group w-200 bg-white">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
    </div>

    <div class="form-group w-200 bg-white">
        <label>No Telp</label>
        <input type="text" name="no_telp" class="form-control" placeholder="Masukkan Nomor Telpon" required>
    </div>

    <!-- <div class="form-group w-200">
        <label>Password</label>
        <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
    </div> -->

    <div class="form-group w-200 bg-white">
        <script>
            function showPw() {
                var x = document.getElementById("myInput");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }
        </script>
        <label>Password</label><br>
        <input type="password" name="password" id="myInput" placeholder="Masukkan Password" autocomplete="current-password">
        <a onclick="showPw()"><i class="bi bi-eye-slash" aria-hidden="true"></i></a>
    </div>

    <div class="form-group w-200 bg-white">
        <label>Email</label>
        <input type="text" name="email" class="form-control" placeholder="Masukkan Email" required>
    </div>

    <div class="form-group pt-4">
        <input type="submit" value="SAVE" class="btn btn-outline-success">
    </div>

</form>

@endsection