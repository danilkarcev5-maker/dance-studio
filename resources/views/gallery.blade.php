@extends('layouts.app')
@section('title', 'Галерея')
@section('content')
    <section class="py-5 animate__animated animate__fadeIn">
        <h1 class="pacifico text-orange mb-4">Галерея наших звезд</h1>
        <div class="row">
            @forelse($galleries as $gallery)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        @if($gallery->file_type === 'image')
                            <img src="{{ asset('storage/' . $gallery->file_path) }}" class="card-img-top" alt="{{ $gallery->title }}">
                        @else
                            <video src="{{ asset('storage/' . $gallery->file_path) }}" class="card-img-top" controls></video>
                        @endif
                        <div class="card-body bg-mint">
                            <h5 class="card-title text-orange pacifico">{{ $gallery->title }}</h5>
                            <p class="card-text">{{ $gallery->description }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center">Галерея пока пуста</p>
            @endforelse
        </div>
    </section>

    <section class="py-5 bg-mint text-center">
        <h2 class="pacifico text-orange mb-4">Хотите поделиться?</h2>
        <p class="lead">Присылайте свои фото и видео на info@dancekids.ru!</p>
    </section>
@endsection