@extends('layouts.layout')

@section('content')

<div class="container bg-white fixed-top">
    <p class="fw-bold fs-4"><a href="javascript:history.back()" class="text-dark"><i
                class="fa fa-arrow-left me-3 mx-2 mt-3" aria-hidden="true"></i></a>{{ $title }}</p>
</div>

<div class="container" style="margin-top: 75px; margin-bottom: 75px">
    <div class="text-center">
        <h1>Profile Pengembang</h1>
        <hr>
        <p>Sistem Pendeteksi Kesepian ini dibuat oleh tim pengembang yang terdiri dari 1 Mahasiswa dan 1 Dosen
            Universitas Janabadra Yogyakarta.
        </p>
    </div>

    <div class="card mt-3">
        <img src="{{ asset('img/muhamaddy.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
            <span class="fw-bold fs-4">Muhamad Dedi Yusup</span>
            <h6 class="card-text">Mahasiswa Informatika</h6>
            <h6 class="card-text">19330015</h6>
        </div>
    </div>

    <div class="card mt-3">
        <img src="{{ asset('img/bu_yumarlin.jpeg') }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
            <span class="fw-bold fs-4">Yumarlin MZ, S.Kom., M.Pd., M.Kom.</span>
            <h6 class="card-text">Dosen - Sistem Pakar</h6>
        </div>
    </div>

</div>
<!-- End Services Area -->

@endsection