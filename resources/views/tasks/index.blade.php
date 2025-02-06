<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
</head>
<body>
    <h1>Task Manager</h1>
    <a href="/tasks/create">Create New Task</a>
    <ul>
 @foreach ($tasks as $task)
    <li>
        <strong>{{ $task->title }}</strong> - {{ $task->description }}
        <small>({{ $task->completed ? 'Completed' : 'Incomplete' }})</small>

        <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>

        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </li>
@endforeach

    </ul>
</body>
</html>
