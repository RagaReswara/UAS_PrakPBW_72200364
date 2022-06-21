@extends('layout.mainForm')
@section('title', 'Home')
@section('content')

              @php
                $pakar = explode(',', $dosen -> pakar);
              @endphp
              
          <form action="/dosen/updateDosen/{{ $dosen->id }}" method="POST" class="pt-2 pb-2">
              @csrf
              @method('PUT')
              <div class="form-group w-200 mt-4">
                <label>NIDN</label>
                <input type="number" name="nidn" class="form-control" value="{{ $dosen->nidn }}" readonly>
              </div>

              <div class="form-group w-200 mt-4">
              <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ $dosen->nama }}" required>
              </div>

              <br>
              
              <label>Status</label>
              <div class="form-check w-100">
                <input type="radio" class="form-check-input" name="status" value="Dosen Tetap" {{ $dosen->status == 'Dosen Tetap' ? 'checked':'' }}>
                <label>Dosen Tetap</label>
              </div>
              <div class="form-check w-100">
                <input type="radio" class="form-check-input" name="status" value="Dosen Tidak Tetap" {{ $dosen->status == 'Dosen Tidak Tetap' ? 'checked':'' }}>
                <label>Dosen Tidak Tetap</label>
              </div>

              <div class="form-group mt-4">
                <label>Jabatan Fungsional</label>
                <select name="jafung" class="form-control w-200">
                    <option value="0">--Silahkan Pilih Jabatan Fungsional--</option>
                    <option value="Tenaga Pengajar" {{ $dosen->jafung == 'Tenaga Pengajar' ? 'selected':'' }} >Tenaga Pengajar</option>
                    <option value="Asisten Ahli" {{ $dosen->jafung == 'Asisten Ahli' ? 'selected':'' }}>Asisten Ahli</option>
                    <option value="Lektor Kepala" {{ $dosen->jafung == 'Lektor Kepala' ? 'selected':'' }}>Lektor Kepala</option>
                    <option value="Lektor" {{ $dosen->jafung == 'Lektor' ? 'selected':'' }}>Lektor</option>
                    <option value="Guru Besar" {{ $dosen->jafung == 'Guru Besar' ? 'selected':'' }}>Guru Besar</option>
                </select>
              </div>

              <br>

              <label>Bidang Keahlian</label>
              <div class="form-check w-25">
                  <input type="checkbox" class="form-check-input" name="pakar[]" value="AI" {{ in_array('AI', $pakar) ? 'checked':'' }} >
                  <label>AI</label>
              </div>
              <div class="form-check w-25">
                  <input type="checkbox" class="form-check-input" name="pakar[]" value="Web" {{ in_array('Web', $pakar) ? 'checked':'' }}>
                  <label>Web</label>
              </div>
              <div class="form-check w-25">
                  <input type="checkbox" class="form-check-input" name="pakar[]" value="DBMS" {{ in_array('DBMS', $pakar) ? 'checked':'' }}>
                  <label>DBMS</label>
              </div>

              <div class="form-group pt-4 mt-4">
                <input type="submit" value="SAVE" class="btn btn-outline-success">
              </div>
          </form>
      </div>
@endsection