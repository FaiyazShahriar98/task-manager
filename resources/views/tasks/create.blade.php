@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-center mb-4">Create New Task</h2>

        <div class="card shadow-sm p-4">
            <form action="/tasks" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Title:</label>
                    <input type="text" name="title" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Description:</label>
                    <textarea name="description" class="form-control" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-success">Create Task</button>
                <a href="/" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection
