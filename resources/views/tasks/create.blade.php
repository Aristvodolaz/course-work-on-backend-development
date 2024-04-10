<!-- resources/views/tasks/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Создать новую задачу</h2>


    <form method="post" action="{{ route('tasks.store') }}">
        @csrf

        <div class="form-group">
            <label for="title">Название:</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Описание:</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="user_id">ID пользователя:</label>
            <input type="number" name="user_id" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Создать задачу</button>
    </form>
@endsection
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

