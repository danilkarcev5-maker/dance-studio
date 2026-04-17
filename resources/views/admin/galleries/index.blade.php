@extends('layouts.app')
@section('title', 'Галерея')
@section('content')
    <h1 class="text-primary fw-bold mb-4">Управление галереей</h1>
    <a href="{{ route('galleries.create') }}" class="btn btn-primary mb-3">Добавить файл</a>
    <div class="row">
        @forelse($galleries as $gallery)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    @if($gallery->file_type === 'image')
                        <img src="{{ asset('storage/' . $gallery->file_path) }}" class="card-img-top" alt="{{ $gallery->title }}">
                    @else
                        <video src="{{ asset('storage/' . $gallery->file_path) }}" class="card-img-top" controls></video>
                    @endif
                    <div class="card-body">
                        <h5 class="card-title text-primary">{{ $gallery->title }}</h5>
                        <p class="card-text">{{ $gallery->description }}</p>
                        <form action="{{ route('galleries.destroy', $gallery) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Удалить?')">Удалить</button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center">Галерея пуста</p>
        @endforelse
    </div>
@endsection