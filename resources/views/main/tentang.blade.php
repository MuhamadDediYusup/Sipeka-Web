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
            <p class="fw-bold">Apakah kamu pernah merasakan kesepian?</p>

            <p>Kesepian adalah suatu permasalahan yang dialami oleh individu diakibatkan oleh hubungan interpersonal
                yang dialaminya saat ini tidak sesuai dengan harapan, tidak menyenangkan, dan terasa menyedihkan.
                Permasalahan ini dapat berupa perasaan sedih, tidak berdaya, putus asa, dan hampa. Kesepian merupakan
                perasaan subjektif individu karena tidak adanya hubungan yang erat dengan orang lain (Russel, Peplau, &
                Cutrona, 1980).</p>

            <p>Kamu Penasaran dengan tingkat kesepianmu? Yuk cek sekarang juga!</p>

            <div class="mt-3 d-grid gap-2">
                <button class="btn btn-secondary">
                    <a href="{{ route('diagnosa.index') }}" class="text-decoration-none text-white">
                        Mulai Diagnosa Kesepian
                    </a>
                </button>
            </div>
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