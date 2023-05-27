@extends('layouts.layout')

@section('content')

<div class="container bg-white fixed-top">
    <p class="fw-bold fs-4"><a href="javascript:history.back()" class="text-dark"><i
                class="fa fa-arrow-left me-3 mx-2 mt-3" aria-hidden="true"></i></a>{{ $title }}</p>
</div>

<div class="container" style="margin-top: 70px; margin-bottom: 75px">
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <h5> <b>*)</b> Item Pertanyaan</h5>
            </table>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>No</th>
                    <th>Pertanyaan</th>
                </tr>
                @foreach ($rulebase as $item)
                <tr>
                    <td>{{ $item->id_item_diagnosa }}</td>
                    <td>{{ $item->item_diagnosa }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="card mt-2">
        <div class="card-body">
            <table class="table table-striped">
                <h5> <b>*)</b> Identifikasi Gejala</h5>
            </table>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>No</th>
                    <th>Jenis Kesepian</th>
                </tr>
                @php
                $i = 1;
                @endphp
                @foreach ($identifikasi as $item)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $item->deskripsi_hasil }}</td>
                </tr>
                @php
                $i++;
                @endphp
                @endforeach
            </table>
        </div>
    </div>
    <div class="card mt-2">
        <div class="card-body">
            <table class="table table-striped">
                <h5> <b>*)</b> Rule Base</h5>
            </table>
        </div>
    </div>
    <div class="card">
        <img src="{{ asset('img/rulebase.png') }}" class="card-img-top" alt="...">
    </div>
</div>


@endsection