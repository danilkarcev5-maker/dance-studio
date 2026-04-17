@extends('layouts.app')
@section('title', 'Регистрация')
@section('content')
    <section class="py-5 animate__animated animate__fadeIn">
        <div class="container">
            <h1 class="pacifico text-orange mb-4 text-center">Регистрация в Dance Kids</h1>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="{{ route('register') }}" method="POST" class="bg-mint p-5 rounded-3 shadow-sm">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="form-label text-dark">Имя</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="email" class="form-label text-dark">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="phone" class="form-label text-dark">Телефон (опционально)</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}">
                            @error('phone')
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
                        <div class="mb-4">
                            <label for="password_confirmation" class="form-label text-dark">Подтверждение пароля</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                        </div>
                        <button type="submit" class="btn btn-orange w-100 mb-3">Зарегистрироваться</button>
                        <p class="text-center text-dark">Уже есть аккаунт? <a href="{{ route('login') }}" class="text-orange">Войдите</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection