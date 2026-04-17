@extends('layouts.app')
@section('title', 'Добавить занятие')
@section('content')
    <h1 class="text-primary fw-bold mb-4">Добавить занятие</h1>
    <form action="{{ route('schedules.store') }}" method="POST" class="bg-white p-4 rounded-3 shadow-sm">
        @csrf
        <div class="mb-3">
            <label for="dance_type" class="form-label">Тип танца</label>
            <input type="text" class="form-control" id="dance_type" name="dance_type" required>
        </div>
        <div class="mb-3">
            <label for="day" class="form-label">День</label>
            <input type="text" class="form-control" id="day" name="day" required>
        </div>
        <div class="mb-3">
            <label for="time" class="form-label">Время</label>
            <input type="time" class="form-control" id="time" name="time" required>
        </div>
        <div class="mb-3">
            <label for="teacher" class="form-label">Преподаватель</label>
            <input type="text" class="form-control" id="teacher" name="teacher" required>
        </div>
        <div class="mb-3">
            <label for="is_active" class="form-label">Статус</label>
            <select class="form-select" id="is_active" name="is_active">
                <option value="1">Активно</option>
                <option value="0">Неактивно</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Добавить</button>
        <a href="{{ route('schedules.index') }}" class="btn btn-secondary">Отмена</a>
    </form>
@endsection