@extends('layouts.app')

@section('content')
    <h1>Список задач</h1>

    <a href="{{ route('tasks.create') }}" class="btn btn-success">Создать новую задачу</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Название</th>
                <th>Описание</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>
                        <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-info">Просмотреть</a>
                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning">Редактировать</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
