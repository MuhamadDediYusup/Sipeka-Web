@extends('layouts.layout')

@section('content')

<nav class="navbar container navbar-expand-lg navbar-light bg-light p-2">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('img/logo.svg') }}" width="70px" alt="">
        </a>
        <div class="" id="navbarSupportedContent">
            <div class="dropdown">
                <img src="{{ asset('img/images.png') }}" width="34px" class="rounded-circle border border-1"
                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" alt="">
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start"
                    aria-labelledby="dropdownMenuButton1">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <li><button type="submit" class="dropdown-item" href="{{ route('logout') }}">Logout</button>
                        </li>
                    </form>
                </ul>
            </div>
        </div>
    </div>
</nav>
{{-- <div class=" mt-3"> --}}
    <section class="container mt-3 section" id="home">
        <div class="card shadow-sm rounded-5 border-0">
            <div class="card-body">
                <div class="text-center">
                    <h5><b>Selamat Datang</b></h5>
                    <p>{{ Auth::user()->name }}</p>
                </div>
            </div>
        </div>
    </section>
    {{--
</div> --}}

<section>
    <div class="container my-3">

        <div class="mt-3 d-grid gap-2">
            <button class="btn btn-secondary">
                <a href="{{ route('diagnosa.index') }}" class="text-decoration-none text-white">
                    Mulai Diagnosa Kesepian
                </a>
            </button>
        </div>

        <hr>
        <p><i class="fa fa-bars" aria-hidden="true"></i> &nbsp;<b>Main Menu</b></p>
        <hr>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col-6">
                <a href="{{ route('petunjuk.index') }}" class="text-decoration-none text-dark">
                    <div class="card border-0 rounded-5">
                        <button type="button" class="btn btn-outline-secondary p-2"><i class="fa fa-book fs-1"
                                aria-hidden="true"></i>
                            <p class="card-text fw-bold mt-1">Petunjuk Penggunaan</p>
                        </button>
                    </div>
                </a>
            </div>
            <div class="col-6">
                <a href="{{ route('tentang.index') }}" class="text-decoration-none text-dark">
                    <div class="card border-0 rounded-5">
                        <button type="button" class="btn btn-outline-secondary p-2">
                            <i class="fa fa-info fs-1" aria-hidden="true"></i>
                            <p class="card-text fw-bold mt-1">Tentang <br> Aplikasi</p>
                        </button>
                    </div>
                </a>
            </div>
            <div class="col-6 mt-2">
                <a href="{{ route('pengembang.index') }}" class="text-decoration-none text-dark">
                    <div class="card border-0 rounded-5">
                        <button type="button" class="btn btn-outline-secondary p-2">
                            <i class="fa fa-book fs-1" aria-hidden="true"></i>
                            <p class="card-text fw-bold mt-1">Profile <br> Pengembang</p>
                        </button>
                    </div>
                </a>
            </div>
            <div class="col-6 mt-2">
                <a href="{{ route('rulebase.index') }}" class="text-decoration-none text-dark">
                    <div class="card border-0 rounded-5">
                        <button type="button" class="btn btn-outline-secondary p-2">
                            <i class="fa fa-book fs-1" aria-hidden="true"></i>
                            <p class="card-text fw-bold mt-1">Rule Base dan Pertanyaan.</p>
                        </button>
                    </div>
                </a>
            </div>

            <div class="text-center mt-5">
                <p class="text-muted
                ">© 2023 Sipeka - Beta Testing</p>
            </div>

        </div>

    </div>
</section>

@endsection