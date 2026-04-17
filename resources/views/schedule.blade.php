@extends('layouts.app')
@section('title', 'Расписание')
@section('content')
    <section class="py-5 animate__animated animate__fadeIn">
        <h1 class="pacifico text-orange mb-4">Расписание занятий</h1>
        <div class="table-responsive">
            <table class="table table-striped table-hover bg-white rounded-3 shadow-sm">
                <thead style="background-color: #a5d6a7; color: #333;">
                    <tr>
                        <th>Тип танца</th>
                        <th>День</th>
                        <th>Время</th>
                        <th>Преподаватель</th>
                        @auth
                            <th>Действия</th>
                        @endauth
                    </tr>
                </thead>
                <tbody>
                    @forelse($schedules as $schedule)
                        <tr>
                            <td>{{ $schedule->dance_type }}</td>
                            <td>{{ $schedule->day }}</td>
                            <td>{{ $schedule->time }}</td>
                            <td>{{ $schedule->teacher }}</td>
                            @auth
                                <td>
                                    <form action="{{ route('enroll') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="schedule_id" value="{{ $schedule->id }}">
                                        <button type="submit" class="btn btn-orange btn-sm">Записаться</button>
                                    </form>
                                </td>
                            @endauth
                        </tr>
                    @empty
                        <tr>
                            <td colspan="{{ auth()->check() ? 5 : 4 }}" class="text-center">Расписание пока пусто</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>

    <section class="py-5 bg-mint text-center">
        <h2 class="pacifico text-orange mb-4">Не нашли время?</h2>
        <p class="lead">Свяжитесь с нами для индивидуального графика!</p>
        <a href="{{ route('contact') }}" class="btn btn-orange">Написать</a>
    </section>
@endsection