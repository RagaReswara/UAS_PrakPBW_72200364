@extends('layout.main')
@section('title', 'Home')
@section('content')

<div class="col-lg-10 vb-100">
                      <div class="card mt-4">
                          <div class="card-header bg-dark">
                              <a name="" id="" class="btn btn-secondary" href="/dosen/formDosen" role="button"><i class="bi bi-person-plus"></i> TAMBAH DOSEN</a>
                          <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/dosen/cari">
                                <input class="form-control mr-sm-2" name= "cari" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                                </form>
                          </div>

                          <div class="card-body bg-dark">
                              @if (session('alert'))
                              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                  <strong>{{ session('alert') }} </strong>
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                              </div>
                              @endif

                          <table class="table table-hover" style="background-color:#7c8280;">
                                <thead>
                                    <tr style="background-color:#ffffff;">
                                    <th scope="col">#</th>
                                    <th scope="col">Nidn</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Jabatan Fungsional</th>
                                    <th scope="col">Keahlian</th>
                                    <th scope="col">Manipulasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dosen as $no => $d)

                                <tr>
                                    <th scope="row">{{ $dosen->firstItem() + $no }}</th>
                                    <td> {{ $d->nidn }}</td>
                                    <td> {{ $d->nama }}</td>
                                    <td> {{ $d->status }}</td>
                                    <td> {{ $d->jafung }}</td>
                                    <td> {{ $d->pakar }}</td>

                                    <td style="background-color:#c2c7c3;">
                                    <a href="/dosen/editDosen/{{ $d -> id }}" class="btn btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
                                    <a href="/dosen/hapusDosen/{{ $d -> id }}" class="btn btn-outline-danger"><i class="bi bi-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>

                                </table>
                                <span class="float-right">
                                    {{ $dosen -> links() }}
                                </span>
                          </div>
                      </div>
                  </div>
@endsection
          