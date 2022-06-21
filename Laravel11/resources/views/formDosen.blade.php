@extends('layout.mainForm')
@section('title', 'Home')
@section('content')

          <form action="/dosen/saveDosen" method="POST" class="pt-2 pb-2">
              @csrf

              <div class="form-group w-200 mt-4">
                <label>NIDN</label>
                <input type="number" name="nidn" class="form-control" placeholder="Masukkan NIDN" required>
              </div>

              <div class="form-group w-200 mt-4">
              <label>Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
              </div>

              <br>
              
              <label>Status</label>
              <div class="form-check w-100">
                <input type="radio" class="form-check-input" name="status" value="Dosen Tetap">
                <label>Dosen Tetap&nbsp</label>
              </div>
              <div class="form-check w-100">
                <input type="radio" class="form-check-input" name="status" value="Dosen Tidak Tetap">
                <label>Dosen Tidak Tetap</label>
              </div>

              <div class="form-group mt-4">
                <label>Jabatan Fungsional</label>
                <select name="jafung" class="form-control w-200">
                    <option value="0">--Silahkan Pilih Jabatan Fungsional--</option>
                    <option value="Tenaga Pengajar">Tenaga Pengajar</option>
                    <option value="Asisten Ahli">Asisten Ahli</option>
                    <option value="Lektor Kepala">Lektor Kepala</option>
                    <option value="Lektor">Lektor</option>
                    <option value="Guru Besar">Guru Besar</option>
                </select>
              </div>

              <br>

              <label>Bidang Keahlian</label>
              <div class="form-check w-25">
                  <input type="checkbox" class="form-check-input" name="pakar[]" value="AI">
                  <label>AI</label>
              </div>
              <div class="form-check w-25">
                  <input type="checkbox" class="form-check-input" name="pakar[]" value="Web">
                  <label>Web</label>
              </div>
              <div class="form-check w-25">
                  <input type="checkbox" class="form-check-input" name="pakar[]" value="DBMS">
                  <label>DBMS</label>
              </div>

              <div class="form-group pt-4 mt-4">
                <input type="submit" value="SAVE" class="btn btn-outline-success">
              </div>
          </form>
      </div>
@endsection