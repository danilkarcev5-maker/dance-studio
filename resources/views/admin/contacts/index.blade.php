@extends('layouts.app')
@section('title', 'Контакты')
@section('content')
    <h1 class="text-primary fw-bold mb-4">Управление сообщениями</h1>
    <div class="table-responsive">
        <table class="table table-striped table-hover bg-white rounded-3 shadow-sm">
            <thead class="bg-primary text-white">
                <tr>
                    <th>Имя</th>
                    <th>Email</th>
                    <th>Сообщение</th>
                    <th>Статус</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                @forelse($contacts as $contact)
                    <tr>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->message }}</td>
                        <td>{{ $contact->is_resolved ? 'Решено' : 'Не решено' }}</td>
                        <td>
                            <form action="{{ route('contacts.update', $contact) }}" method="POST" class="d-inline">
                                @csrf
                                @method('PUT')
                                <select name="is_resolved" onchange="this.form.submit()">
                                    <option value="0" {{ !$contact->is_resolved ? 'selected' : '' }}>Не решено</option>
                                    <option value="1" {{ $contact->is_resolved ? 'selected' : '' }}>Решено</option>
                                </select>
                            </form>
                            <form action="{{ route('contacts.destroy', $contact) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Удалить?')">Удалить</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Сообщений нет</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection