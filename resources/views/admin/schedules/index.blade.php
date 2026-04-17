@extends('layouts.app')
@section('title', 'Расписание')
@section('content')
    <h1 class="text-primary fw-bold mb-4">Управление расписанием</h1>
    <a href="{{ route('schedules.create') }}" class="btn btn-primary mb-3">Добавить занятие</a>
    <div class="table-responsive">
        <table class="table table-striped table-hover bg-white rounded-3 shadow-sm">
            <thead class="bg-primary text-white">
                <tr>
                    <th>Тип танца</th>
                    <th>День</th>
                    <th>Время</th>
                    <th>Преподаватель</th>
                    <th>Статус</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                @forelse($schedules as $schedule)
                    <tr>
                        <td>{{ $schedule->dance_type }}</td>
                        <td>{{ $schedule->day }}</td>
                        <td>{{ $schedule->time }}</td>
                        <td>{{ $schedule->teacher }}</td>
                        <td>{{ $schedule->is_active ? 'Активно' : 'Неактивно' }}</td>
                        <td>
                            <a href="{{ route('schedules.edit', $schedule) }}" class="btn btn-sm btn-warning">Редактировать</a>
                            <form action="{{ route('schedules.destroy', $schedule) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Удалить?')">Удалить</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Расписание пусто</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection