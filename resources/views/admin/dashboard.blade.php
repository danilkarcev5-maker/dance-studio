@extends('layouts.app')
@section('title', 'Админ-панель')
@section('content')
    <section class="py-5 animate__animated animate__fadeIn">
        <h1 class="pacifico text-coral mb-4">Админ-панель</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card shadow-sm text-center bg-mint">
                    <div class="card-body">
                        <h5 class="card-title text-coral pacifico">Пользователей</h5>
                        <p class="card-text display-6">{{ $userCount }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm text-center bg-mint">
                    <div class="card-body">
                        <h5 class="card-title text-coral pacifico">Заявок</h5>
                        <p class="card-text display-6">{{ $enrollmentCount }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4 text-center">
            <a href="{{ route('users.index') }}" class="btn btn-coral me-2">Пользователи</a>
            <a href="{{ route('schedules.index') }}" class="btn btn-coral me-2">Расписание</a>
            <a href="{{ route('enrollments.index') }}" class="btn btn-coral me-2">Заявки</a>
            <a href="{{ route('galleries.index') }}" class="btn btn-coral me-2">Галерея</a>
            <a href="{{ route('contacts.index') }}" class="btn btn-coral">Контакты</a>
        </div>
    </section>
@endsection