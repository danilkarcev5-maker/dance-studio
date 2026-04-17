@extends('layouts.app')
@section('title', 'Вход')
@section('content')
    <section class="py-5 animate__animated animate__fadeIn">
        <div class="container">
            <h1 class="pacifico text-orange mb-4 text-center">Вход в Dance Kids</h1>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="{{ route('login') }}" method="POST" class="bg-mint p-5 rounded-3 shadow-sm">
                        @csrf
                        <div class="mb-4">
                            <label for="email" class="form-label text-dark">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label text-dark">Пароль</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4 form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember">
                            <label class="form-check-label text-dark" for="remember">Запомнить меня</label>
                        </div>
                        <button type="submit" class="btn btn-orange w-100 mb-3">Войти</button>
                        <p class="text-center text-dark">Нет аккаунта? <a href="{{ route('register') }}" class="text-orange">Зарегистрируйтесь</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection