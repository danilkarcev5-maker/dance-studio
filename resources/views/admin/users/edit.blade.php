@extends('layouts.app')
@section('title', 'Редактировать пользователя')
@section('content')
    <h1 class="text-primary fw-bold mb-4">Редактировать пользователя: {{ $user->name }}</h1>
    <form action="{{ route('users.update', $user) }}" method="POST" class="bg-white p-4 rounded-3 shadow-sm">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="role" class="form-label">Роль</label>
            <select class="form-select" id="role" name="role" required>
                <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>Пользователь</option>
                <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Администратор</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Отмена</a>
    </form>
@endsection