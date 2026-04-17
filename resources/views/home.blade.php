@extends('layouts.app')
@section('title', 'Главная')
@section('content')
    <section class="hero py-5 text-center text-white animate__animated animate__fadeIn" style="background: linear-gradient(135deg, #4a2c6a, #ff87b2);">
        <h1 class="pacifico display-3">Добро пожаловать в Dance Kids!</h1>
        <p class="lead">Танцы для детей — это радость, развитие и новые друзья!</p>
        <a href="{{ route('schedule') }}" class="btn btn-orange btn-lg mt-3">Записаться сейчас</a>
    </section>

    <section class="py-5">
        <h2 class="pacifico text-orange text-center mb-4 animate__animated animate__fadeInUp">Наши преимущества</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card shadow-sm text-center bg-mint">
                    <div class="card-body">
                        <h5 class="card-title text-orange pacifico">Разные стили</h5>
                        <p class="card-text">Балет, хип-хоп, джаз — выбирайте свое!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm text-center bg-mint">
                    <div class="card-body">
                        <h5 class="card-title text-orange pacifico">Опытные педагоги</h5>
                        <p class="card-text">Сертифицированные тренеры для детей.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm text-center bg-mint">
                    <div class="card-body">
                        <h5 class="card-title text-orange pacifico">Безопасность</h5>
                        <p class="card-text">Современные залы и оборудование.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-mint text-center">
        <h2 class="pacifico text-orange mb-4">Наши достижения</h2>
        <p class="lead">10+ наград на танцевальных конкурсах в 2024 году!</p>
        <div class="row mt-4">
            <div class="col-md-6">
                <p class="lead">Участие в региональных фестивалях.</p>
            </div>
            <div class="col-md-6">
                <p class="lead">Подготовка к международным соревнованиям.</p>
            </div>
        </div>
    </section>
@endsection