@extends('layouts.app')

@section('content')
    <h1>Просмотр задачи</h1>

    <p><strong>ID:</strong> {{ $task->id }}</p>
    <p><strong>Название:</strong> {{ $task->title }}</p>
    <p><strong>Описание:</strong> {{ $task->description }}</p>
    <p><strong>ID пользователя:</strong> {{ $task->user_id }}</p>

    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning">Редактировать</a>
    <form method="POST" action="{{ route('tasks.destroy', $task->id) }}" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Удалить</button>
    </form>
@endsection
