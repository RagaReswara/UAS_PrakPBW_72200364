@extends('layout.main')
@section('title', 'Home')
@section('content')

<div class="col-lg-10 vb-100">
                      <div class="card mt-4">
                          <div class="card-header bg-dark">
                              <a name="" id="" class="btn btn-secondary" href="/mhs/formMhs" role="button"><i class="bi bi-person-plus"></i> TAMBAH MAHASISWA</a>
                          <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/mhs/cari">
                                <input class="form-control mr-sm-2" name= "cari" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                            </form>
                          </div>
                          <div class="card-body bg-dark">

                          <div class="card-body">
                              @if (session('alertTambah'))
                              <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                  <strong>{{ session('alertTambah') }} </strong>
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                              </div>
                              @elseif (session('alertUpdate'))
                              <div class="alert alert-success alert-dismissible fade show" role="alert">
                                  <strong>{{ session('alertUpdate') }} </strong>
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                              </div>
                              @elseif (session('alertDelete'))
                              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                  <strong>{{ session('alertDelete') }} </strong>
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                              </div>
                              @endif
                              
                          <table class="table table-hover" style="background-color:#7c8280;">
                                <thead>
                                    <tr style="background-color:#ffffff;">
                                    <th scope="col">#</th>
                                    <th scope="col">Nim</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Jurusan</th>
                                    <th scope="col">Bidang Minat</th>
                                    <th scope="col">Manipulasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mhs as $no => $d)

                                <tr>
                                    <th scope="row">{{$mhs->firstItem() + $no}}</th>
                                    <td> {{ $d->nim }}</td>
                                    <td> {{ $d->nama }}</td>
                                    <td> {{ $d->gender }}</td>
                                    <td> {{ $d->jurusan }}</td>
                                    <td> {{ $d->bidangMinat }}</td>

                                    <td style="background-color:#c2c7c3;">
                                    <a href="/mhs/editMhs/{{ $d -> id }}" class="btn btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
                                    <a href="/mhs/hapusMhs/{{ $d -> id }}" onclick="return confirm('Apakah anda yakin ingin menghapusnya?')" class="btn btn-outline-danger"><i class="bi bi-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>

                                </table>
                                <span class="float-right" style="background-color:#ffffff;">
                                    {{ $mhs -> links() }}
                                </span>
                          </div>
                      </div>
</div>
@endsection