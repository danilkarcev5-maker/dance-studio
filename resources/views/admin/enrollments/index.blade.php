@extends('layouts.app')
@section('title', 'Заявки')
@section('content')
    <h1 class="text-primary fw-bold mb-4">Управление заявками</h1>
    <div class="table-responsive">
        <table class="table table-striped table-hover bg-white rounded-3 shadow-sm">
            <thead class="bg-primary text-white">
                <tr>
                    <th>Пользователь</th>
                    <th>Занятие</th>
                    <th>Статус</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                @forelse($enrollments as $enrollment)
                    <tr>
                        <td>{{ $enrollment->user->name }}</td>
                        <td>{{ $enrollment->schedule->dance_type }} ({{ $enrollment->schedule->day }})</td>
                        <td>{{ $enrollment->status }}</td>
                        <td>
                            <form action="{{ route('enrollments.update', $enrollment) }}" method="POST" class="d-inline">
                                @csrf
                                @method('PUT')
                                <select name="status" onchange="this.form.submit()">
                                    <option value="pending" {{ $enrollment->status === 'pending' ? 'selected' : '' }}>В ожидании</option>
                                    <option value="approved" {{ $enrollment->status === 'approved' ? 'selected' : '' }}>Одобрено</option>
                                    <option value="rejected" {{ $enrollment->status === 'rejected' ? 'selected' : '' }}>Отклонено</option>
                                </select>
                            </form>
                            <form action="{{ route('enrollments.destroy', $enrollment) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Удалить?')">Удалить</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">Заявок нет</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection