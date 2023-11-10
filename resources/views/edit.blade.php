@extends('layouts.app')

@section('title', 'Edit Task')

@section('styles')
    <style>
        .error-message {
            color: red;
            font-size: 0, 8rem;
        }
    </style>

@section('content')
    <form method="POST" action="{{ route('tasks.update', ['task'=> $task->id ]) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="title">
                Title
            </label>
            <input type="text" name="title" id="title" value="{{ $task->title }}" />
        </div>
        @error('title')
            <p class="error-message">{{ $message }}</p>
        @enderror

        <div>
            <label for="description">
                Description
            </label>
            <textarea name="description" id="description" rows="5">{{ $task->description }}</textarea>
        </div>
        @error('description')
            <p class="error-message">{{ $message }}</p>
        @enderror

        <div>
            <label for="long_description">
                Long Description
            </label>
            <textarea name="long_description" id="long_description" rows="10">{{ $task->long_description }}</textarea>
        </div>
        @error('long_description')
            <p class="error-message">{{ $message }}</p>
        @enderror

        <div>
            <input type="submit" value="Edit Task" />
        </div>
    </form>
@endsection