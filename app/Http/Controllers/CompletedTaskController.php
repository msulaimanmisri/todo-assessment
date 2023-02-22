<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class CompletedTaskController extends Controller
{
    public function showAllTaskThatCompleted()
    {
        $todos = Todo::query()->orderBy('created_at', 'desc')->where('is_complete', true)->get();
        return view('main.todo.completed', compact('todos'));
    }

    public function completeTheTask(Todo $todo)
    {
        $title = $todo->title;
        $todo->update(['is_complete' => true]);

        return to_route('todo.index')->with('success', 'Congratulations! You just finish task : ' . ucwords($title));
    }
}
