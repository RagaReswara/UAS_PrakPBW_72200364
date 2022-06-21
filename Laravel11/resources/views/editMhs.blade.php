@extends('layout.mainForm')
@section('title', 'Home')
@section('content')

@php
$bidangMinat = explode(',', $mhs -> bidangMinat);
@endphp

<form action="/mhs/updateMhs/{{ $mhs->id }}" method="POST" class="pt-2 pb-2">
  @csrf
  @method('PUT')
  <div class="form-group w-200 mt-4">
    <label>NIM</label>
    <input type="number" name="nim" class="form-control" value="{{ $mhs->nim }}" readonly>
  </div>

  <div class="form-group w-200 mt-4">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control" value="{{ $mhs->nama }}" required>
  </div>

  <br>

  <label>Gender</label>
  <div class="form-check w-100">
    <input type="radio" class="form-check-input" name="gender" value="Laki-laki" {{ $mhs->gender == 'Laki-laki' ? 'checked':'' }}>
    <label>Laki-laki</label>
  </div>
  <div class="form-check w-100">
    <input type="radio" class="form-check-input" name="gender" value="Perempuan" {{ $mhs->gender == 'Perempuan' ? 'checked':'' }}>
    <label>Perempuan</label>
  </div>

  <div class="form-group mt-4">
    <label>Jurusan</label>
    <select name="jurusan" class="form-control w-200">
      <option value="0">--Silahkan Pilih Jurusan--</option>
      <option value="Desain Produk" {{ $mhs->jurusan == 'Desain Produk' ? 'selected':'' }}>Desain Produk</option>
      <option value="Sistem Informasi" {{ $mhs->jurusan == 'Sistem Informasi' ? 'selected':'' }}>Sistem Informasi</option>
      <option value="Management" {{ $mhs->jurusan == 'Management' ? 'selected':'' }}>Management</option>
      <option value="Kedokteran" {{ $mhs->jurusan == 'Kedokteran' ? 'selected':'' }}>Kedokteran</option>
      <option value="Akuntansi" {{ $mhs->jurusan == 'Akuntansi' ? 'selected':'' }}>Akuntansi</option>
    </select>
  </div>

  <br>

  <label>Bidang Minat</label>
  <div class="form-check w-25">
    <input type="checkbox" class="form-check-input" name="bidangMinat[]" value="Layanan" {{ in_array('Layanan', $bidangMinat) ? 'checked':'' }}>
    <label>Layanan</label>
  </div>
  <div class="form-check w-25">
    <input type="checkbox" class="form-check-input" name="bidangMinat[]" value="Kesehatan" {{ in_array('Kesehatan', $bidangMinat) ? 'checked':'' }}>
    <label>Kesehatan</label>
  </div>
  <div class="form-check w-25">
    <input type="checkbox" class="form-check-input" name="bidangMinat[]" value="Akuntansi" {{ in_array('Akuntansi', $bidangMinat) ? 'checked':'' }}>
    <label>Akuntansi</label>
  </div>

  <div class="form-group pt-4 mt-4">
    <input type="submit" value="SAVE" class="btn btn-outline-success">
  </div>
</form>
</div>
@endsection