@extends('layouts.layout')

@section('content')

<div class="container bg-white fixed-top">
    <p class="fw-bold fs-4"><a href="javascript:history.back()" class="text-dark"><i
                class="fa fa-arrow-left me-3 mx-2 mt-3" aria-hidden="true"></i></a>{{ $title }}</p>
</div>

<div class="container" style="margin-top: 70px; margin-bottom: 75px">
    <div class="card">
        <img src="{{ asset('img/loneliness.webp') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Anda Saat Ini <b>{{ $hasilAkhir->deskripsi_hasil }}</b></h5>
            <p>Dengan nilai hasil perhitungan UCLA loneliness scale version 3 sebesar {{ $totalNilai }}</p>
            {!! $rekomendasi->deskripsi_rekomendasi !!}
        </div>
    </div>

    <div class="card bg-danger text-white mb-3 mt-3">
        <div class="card-body">
            <b>Disclaimer</b>
            <hr>
            Jika Anda sedang mengalami krisis psikologis yang mengancam hidup Anda, layanan ini tidak direkomendasikan.
            Berkonsultasilah secara langsung pada pakar/psikolog
        </div>
    </div>
</div>

@endsection