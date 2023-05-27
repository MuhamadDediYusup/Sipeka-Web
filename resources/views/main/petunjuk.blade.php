@extends('layouts.layout')

@section('content')

<div class="container bg-white fixed-top">
    <p class="fw-bold fs-4"><a href="javascript:history.back()" class="text-dark"><i
                class="fa fa-arrow-left me-3 mx-2 mt-3" aria-hidden="true"></i></a>{{ $title }}</p>
</div>

<div class="container" style="margin-top: 75px">
    <div class="card mb-3 shadow" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-4">
                <img src="{{ asset('img/about.jpg') }}" class="img-fluid rounded-start h-100" alt="...">
            </div>
            <div class="col-8">
                <div class="card-body">
                    <p class="card-text">Untuk mengidentifikasi ganguan mentalmu terkait kesepian kamu, kamu hanya perlu
                        mengisi beberapa
                        pertanyaan yang ada pada sistem ini.
                        Setelah itu, sistem akan memberikan hasil identifikasi tingkat kesepianmu.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <hr>
    <p class="fw-bold">Petunjuk Penggunaan Sistem</p>
    <hr>
</div>

<!-- Start Services Area -->
<section class="services style3 section" id="petunjuk" style="margin-bottom: 75px">
    <div class="container">

        <div class="card border-0 shadow mb-3">
            <div class="card-body">
                <h5 class="card-title">1. Mulai Diagnosa dan Konsultasi</h5>
                <hr>
                <p>
                    Pada Menu Navbar di atas terdapat menu <a href="#">"Diagnosa Kesepian"</a>. Klik menu
                    tersebut untuk mengakses halaman diagnosa.
                </p>
            </div>
        </div>
        <div class="card border-0 shadow mb-3">
            <div class="card-body">
                <h5 class="card-title">2. Konsultasikan Masalahmu</h5>
                <hr>
                <p>
                    Setelah kamu mengakses halaman diagnosa, kamu akan diarahkan ke halaman konsultasi. Isi
                    konsultasi dengan sejujur-jujurnya.
                </p>
            </div>
        </div>
        <div class="card border-0 shadow">
            <div class="card-body">
                <h5 class="card-title">3. Dapatkan Hasil Konsultasi</h5>
                <hr>
                <p>
                    Setelah kamu mengisi konsultasi, kamu diarahkan ke halaman hasil konsultasi. Hasil
                    konsultasi akan menampilkan tingkat kesepianmu.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End Services Area -->


@endsection