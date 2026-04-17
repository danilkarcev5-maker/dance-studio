<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Танцевальная студия - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="d-flex flex-column min-vh-100">
    <header class="header py-3 shadow-sm animate__animated animate__fadeInDown">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand pacifico fs-3 text-white" href="{{ route('home') }}">Dance Kids</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link text-white" href="{{ route('home') }}">Главная</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="{{ route('about') }}">О нас</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="{{ route('schedule') }}">Расписание</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="{{ route('gallery') }}">Галерея</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="{{ route('contact') }}">Контакты</a></li>
                        @auth
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Выйти</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                            @if(auth()->user()->isAdmin())
                                <li class="nav-item"><a class="nav-link text-mint" href="{{ route('admin.dashboard') }}">Админ</a></li>
                            @endif
                        @else
                            <li class="nav-item"><a class="nav-link text-white" href="{{ route('login') }}">Войти</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="{{ route('register') }}">Регистрация</a></li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container my-5 flex-grow-1">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show animate__animated animate__fadeIn" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show animate__animated animate__fadeIn" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        @yield('content')
    </div>

    <footer class="footer py-4 text-white animate__animated animate__fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5 class="pacifico text-orange">Dance Kids</h5>
                    <p>Танцы для детей с радостью и вдохновением!</p>
                </div>
                <div class="col-md-4">
                    <h5 class="text-mint">Навигация</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('home') }}" class="text-white text-decoration-none">Главная</a></li>
                        <li><a href="{{ route('schedule') }}" class="text-white text-decoration-none">Расписание</a></li>
                        <li><a href="{{ route('contact') }}" class="text-white text-decoration-none">Контакты</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="text-mint">Связь с нами</h5>
                    <p>Email: info@dancekids.ru<br>Телефон: +7 (123) 456-78-90</p>
                    <p>ул. Танцевальная, 10</p>
                </div>
            </div>
            <hr class="bg-white">
            <p class="text-center mb-0">© 2025 Dance Kids. Все права защищены.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>