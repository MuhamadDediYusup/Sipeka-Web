@extends('layouts.layout')

@section('content')

<div class="container bg-white fixed-top">
    <p class="fw-bold fs-4"><a href="javascript:history.back()" class="text-dark"><i
                class="fa fa-arrow-left me-3 mx-2 mt-3" aria-hidden="true"></i></a>{{ $title }}</p>
</div>

<div class="container" style="margin-top: 70px; margin-bottom: 75px">
    <div class="card bg-primary text-white mb-3">
        <div class="card-body"><span class="text-danger">*</span>
            Silahkan Isi Pertanyaan Berdasarkan Skala Yang Kamu
            Rasakan.
        </div>
    </div>
    <div class="col-12 mb-4">
        <form action="{{ route('diagnosa.result') }}" method="POST">

            @csrf
            @php
            $i = 1;
            $id = 1;
            @endphp
            @foreach ($itemDiagnosa as $item)
            <div class="card mb-2">
                <div class="card-body">
                    <div class="div">
                        {{ $item->item_diagnosa }}
                    </div>
                    <div class="mt-2">

                        <div class="inputGroup">
                            <input value="{{ $item->tidak }}" id="item-{{ $id }}" name="item-{{ $i }}" type="radio" />
                            <label for="item-{{ $id }}">Tidak Pernah</label>
                        </div>
                        @php
                        $id++;
                        @endphp
                        <div class="inputGroup">
                            <input value="{{ $item->jarang }}" id="item-{{ $id }}" name="item-{{ $i }}" type="radio" />
                            <label for="item-{{ $id }}">Jarang</label>
                        </div>
                        @php
                        $id++;
                        @endphp
                        <div class="inputGroup">
                            <input value="{{ $item->kadang }}" id="item-{{ $id }}" name="item-{{ $i }}" type="radio" />
                            <label for="item-{{ $id }}">Kadang-Kadang</label>
                        </div>
                        @php
                        $id++;
                        @endphp
                        <div class="inputGroup">
                            <input value="{{ $item->selalu }}" id="item-{{ $id }}" name="item-{{ $i }}" type="radio" />
                            <label for="item-{{ $id }}">Selalu</label>
                        </div>
                        @php
                        $id++;
                        @endphp
                    </div>
                </div>
            </div>
            @php
            $i++;
            @endphp
            @endforeach
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-secondary">Kirim Data Konsultasi</button>
            </div>
        </form>
    </div>
    <!-- End Services Area -->


    @endsection