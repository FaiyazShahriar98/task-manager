<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>
</head>
<body>
    <h1>Create a New Task</h1>
    <form action="/tasks" method="POST">
        @csrf <!-- Protects against CSRF attacks -->
        <label for="title">Task Title:</label><br>
        <input type="text" id="title" name="title" required><br><br>

        <label for="description">Task Description:</label><br>
        <textarea id="description" name="description"></textarea><br><br>

        <button type="submit">Create Task</button>
    </form>
    <a href="/">Back to Task List</a>
</body>
</html>
