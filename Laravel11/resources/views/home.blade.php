@extends('layout.main')
@section('title', 'Home')
@section('content')

<div class="col-lg-10 vb-100">
    <div class="card mt-4">
        <div class="card-header bg-dark" style="color: #ffffff;">
            SELAMAT DATANG {{ Auth::user()->nama ?? '' }}
        </div>
        <div class="card-header bg-success" style="color: #ffffff;">
            Anda sudah dapat mengakses web
        </div>
    </div>
</div>

@endsection