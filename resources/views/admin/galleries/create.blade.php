@extends('layouts.app')
@section('title', 'Добавить в галерею')
@section('content')
    <h1 class="text-primary fw-bold mb-4">Добавить в галерею</h1>
    <form action="{{ route('galleries.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-4 rounded-3 shadow-sm">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Название</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="file" class="form-label">Файл (фото/видео)</label>
            <input type="file" class="form-control" id="file" name="file" accept="image/*,video/mp4" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Описание</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Добавить</button>
        <a href="{{ route('galleries.index') }}" class="btn btn-secondary">Отмена</a>
    </form>
@endsection