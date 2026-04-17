@extends('layouts.app')
@section('title', 'Редактировать занятие')
@section('content')
    <h1 class="text-primary fw-bold mb-4">Редактировать занятие</h1>
    <form action="{{ route('schedules.update', $schedule) }}" method="POST" class="bg-white p-4 rounded-3 shadow-sm">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="dance_type" class="form-label">Тип танца</label>
            <input type="text" class="form-control" id="dance_type" name="dance_type" value="{{ $schedule->dance_type }}" required>
        </div>
        <div class="mb-3">
            <label for="day" class="form-label">День</label>
            <input type="text" class="form-control" id="day" name="day" value="{{ $schedule->day }}" required>
        </div>
        <div class="mb-3">
            <label for="time" class="form-label">Время</label>
            <input type="time" class="form-control" id="time" name="time" value="{{ $schedule->time }}" required>
        </div>
        <div class="mb-3">
            <label for="teacher" class="form-label">Преподаватель</label>
            <input type="text" class="form-control" id="teacher" name="teacher" value="{{ $schedule->teacher }}" required>
        </div>
        <div class="mb-3">
            <label for="is_active" class="form-label">Статус</label>
            <select class="form-select" id="is_active" name="is_active">
                <option value="1" {{ $schedule->is_active ? 'selected' : '' }}>Активно</option>
                <option value="0" {{ !$schedule->is_active ? 'selected' : '' }}>Неактивно</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>
        <a href="{{ route('schedules.index') }}" class="btn btn-secondary">Отмена</a>
    </form>
@endsection