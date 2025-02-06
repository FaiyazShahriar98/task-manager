@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-center mb-4">Edit Task</h2>

        <div class="card shadow-sm p-4">
            <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Title:</label>
                    <input type="text" name="title" class="form-control" value="{{ $task->title }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Description:</label>
                    <textarea name="description" class="form-control" rows="3">{{ $task->description }}</textarea>
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="completed" {{ $task->completed ? 'checked' : '' }}>
                    <label class="form-check-label">Mark as Completed</label>
                </div>

                <button type="submit" class="btn btn-primary">Update Task</button>
                <a href="/" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection
