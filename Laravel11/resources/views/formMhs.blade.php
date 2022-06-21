@extends('layout.mainForm')
@section('title', 'Home')
@section('content')
          <form action="/mhs/saveMhs" method="POST" class="pt-2 pb-2">
              @csrf

              <div class="form-group w-200 mt-4">
                <label>NIM</label>
                <input type="number" name="nim" class="form-control" placeholder="Masukkan NIM" required>
              </div>

              <div class="form-group w-200 mt-4">
              <label>Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
              </div>

              <br>
              
              <label>Gender</label>
              <div class="form-check w-100">
                <input type="radio" class="form-check-input" name="gender" value="Laki-laki">
                <label>Laki-laki</label>
              </div>
              <div class="form-check w-100">
                <input type="radio" class="form-check-input" name="gender" value="Perempuan">
                <label>Perempuan</label>
              </div>

              <div class="form-group mt-4">
                <label>Jurusan</label>
                <select name="jurusan" class="form-control w-200">
                    <option value="0">--Jurusan Yang Diambil--</option>
                    <option value="Desain Produk">Desain Produk</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Management">Management</option>
                    <option value="Kedokteran">Kedokteran</option>
                    <option value="Akuntansi">Akuntansi</option>
                </select>
              </div>

              <br>

              <label>Bidang Minat</label>
              <div class="form-check w-100">
                  <input type="checkbox" class="form-check-input" name="bidangMinat[]" value="Layanan">
                  <label>Layanan</label>
              </div>
              <div class="form-check w-100">
                  <input type="checkbox" class="form-check-input" name="bidangMinat[]" value="Kesehatan">
                  <label>Kesehatan</label>
              </div>
              <div class="form-check w-100">
                  <input type="checkbox" class="form-check-input" name="bidangMinat[]" value="Akuntansi">
                  <label>Akuntansi</label>
              </div>

              <div class="form-group pt-4 mt-4">
                <input type="submit" value="SAVE" class="btn btn-outline-success">
              </div>
          </form>
@endsection