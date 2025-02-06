<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TaskController;

// Define routes for task management
Route::get('/', [TaskController::class, 'index']); // Display all tasks
Route::get('/tasks/create', [TaskController::class, 'create']); // Show form to create a task
Route::post('/tasks', [TaskController::class, 'store']); // Store a new task
Route::get('/tasks/{id}', [TaskController::class, 'show']); // Display a specific task
Route::get('/tasks/{id}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
Route::put('/tasks/{id}', [TaskController::class, 'update'])->name('tasks.update');
Route::delete('/tasks/{id}', [TaskController::class, 'destroy'])->name('tasks.destroy');