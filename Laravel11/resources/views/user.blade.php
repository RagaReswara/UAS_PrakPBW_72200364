@extends('layout.main')
@section('title', 'Home')
@section('content')

<div class="col-lg-10 vb-100">
    <div class="card mt-4">
        <div class="card-header bg-dark">
            <a name="" id="" class="btn btn-primary" href="/user/formUser" role="button"><i class="bi bi-person-plus"></i> ADD USER</a>
            <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/user/cari">
                <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
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

                <table class="table table-hower bg-white">
                    <thread>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">NIK User</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">No Telp</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thread>
                    <tbody>
                        @foreach ($user as $no => $u)
                        <tr>
                            <th scope="row"> {{ $user -> firstItem() + $no }} </th>
                            <td> {{ $u->nik }} </td>
                            <td> {{ $u->nama }} </td>
                            <td> {{ $u->email }} </td>
                            <td> {{ $u->no_telp }} </td>
                            <td>
                                <a href="/user/editUser/{{ $u->id }}" class="btn btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
                                <a href="/user/hapusUser/{{ $u -> id }}" onclick="return confirm('Apakah anda yakin ingin menghapusnya?')" class="btn btn-outline-danger"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <span class="float-right"> {{ $user->links() }}</span>
            </div>
        </div>
    </div>
    @endsection