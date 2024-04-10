@extends('layouts.app')

@section('content')
    <h1>Редактировать задачу</h1>

    <form method="POST" action="{{ route('tasks.update', $task->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Название:</label>
            <input type="text" name="title" class="form-control" value="{{ $task->title }}" required>
        </div>

        <div class="form-group">
            <label for="description">Описание:</label>
            <textarea name="description" class="form-control" required>{{ $task->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="user_id">ID пользователя:</label>
            <input type="number" name="user_id" class="form-control" value="{{ $task->user_id }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Обновить задачу</button>
    </form>
@endsection
