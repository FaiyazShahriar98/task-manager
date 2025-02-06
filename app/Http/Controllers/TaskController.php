<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all(); // Retrieve all tasks from the database
        return view('tasks.index', compact('tasks')); // Pass tasks to the view
    }

    public function create()
    {
    return view('tasks.create'); // Render the create task form
    }
    
    public function store(Request $request)
{
    // Validate the input
    $request->validate([
        'title' => 'required|max:255',
        'description' => 'nullable'
    ]);

    // Create a new task
    Task::create([
        'title' => $request->title,
        'description' => $request->description,
        'completed' => false // Default value
    ]);

    // Redirect back to the task list
    return redirect('/');
}
public function edit($id)
{
    $task = Task::findOrFail($id);
    return view('tasks.edit', compact('task'));
}

public function update(Request $request, $id)
{
    $task = Task::findOrFail($id);
    $request->validate([
        'title' => 'required|max:255',
        'description' => 'nullable',
        'completed' => 'boolean'
    ]);

    $task->update([
        'title' => $request->title,
        'description' => $request->description,
        'completed' => $request->completed ?? false
    ]);

    return redirect('/')->with('success', 'Task updated successfully!');
}

public function destroy($id)
{
    Task::findOrFail($id)->delete();
    return redirect('/')->with('success', 'Task deleted successfully!');
}

}