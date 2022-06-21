@extends('layout.mainForm')
@section('title', 'Home')
@section('content')

<form action="/user/updateUser/{{ $user->id }}" method="POST" class="pt-2 pb-2">
  @csrf
  @method('PUT')
  <div class="form-group w-200 mt-4">
    <label style="color:#ffffff;" >NIK</label>
    <input type="number" name="nik" class="form-control" value="{{ $user->nik }}" readonly>
  </div>

  <div class="form-group w-200 mt-4">
    <label style="color:#ffffff;">Nama</label>
    <input type="text" name="nama" class="form-control" value="{{ $user->nama }}" required>
  </div>

  <br>

  <div class="form-group w-200 mt-4">
    <label style="color:#ffffff;">No Telp</label>
    <input type="text" name="no_telp" class="form-control" value="{{ $user->no_telp }}" required>
  </div>

  <br>

  <div class="form-group w-200 mt-4">
    <label style="color:#ffffff;">Email</label>
    <input type="text" name="email" class="form-control" value="{{ $user->email }}" required>
  </div>
  <div class="form-group pt-4 mt-4">
    <input type="submit" value="SAVE" class="btn btn-outline-success" style="background-color:seagreen;">
  </div>
</form>
</div>

@endsection