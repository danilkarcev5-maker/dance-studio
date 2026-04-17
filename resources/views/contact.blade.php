@extends('layouts.app')
@section('title', 'Контакты')
@section('content')
    <section class="py-5 animate__animated animate__fadeIn">
        <h1 class="pacifico text-orange mb-4">Свяжитесь с нами</h1>
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('contact.store') }}" method="POST" class="bg-mint p-4 rounded-3 shadow-sm">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Имя</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Сообщение</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-orange">Отправить</button>
                </form>
            </div>
            <div class="col-md-6">
                <div class="bg-a5d6a7 p-4 rounded-3 shadow-sm">
                    <h5 class="text-orange pacifico">Наши контакты</h5>
                    <p><strong>Телефон:</strong> +7 (123) 456-78-90</p>
                    <p><strong>Email:</strong> info@dancekids.ru</p>
                    <p><strong>Адрес:</strong> ул. Танцевальная, 10</p>
                </div>
            </div>
        </div>
    </section>
@endsection