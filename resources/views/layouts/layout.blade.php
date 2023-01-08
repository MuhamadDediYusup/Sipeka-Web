<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @stack('css')

    <title>Sipeka</title>
</head>

<body>
    <!--=============== HEADER ===============-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#">
                <img src="{{ asset('img/logo.svg') }}" width="70px" alt="Sipeka">
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">
                            <i class='bx bx-home-alt nav__icon'></i>
                            <span class="v__name">Home</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#about" class="nav__link">
                            <i class='bx bx-user nav__icon'></i>
                            <span class="nav__name">About</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#skills" class="nav__link">
                            <i class='bx bx-book-alt nav__icon'></i>
                            <span class="nav__name">Skills</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#portfolio" class="nav__link">
                            <i class='bx bx-briefcase-alt nav__icon'></i>
                            <span class="nav__name">Portfolio</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#contactme" class="nav__link">
                            <i class='bx bx-message-square-detail nav__icon'></i>
                            <span class="nav__name">Contactme</span>
                        </a>
                    </li>
                </ul>
            </div>

            <img src="{{ asset('img') }}" alt="" class="nav__img">
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <!--=============== MAIN JS ===============-->
    <script src="{{ asset('js/main.js') }}"></script>

    @stack('js')
</body>

</html>