<?php

namespace App\Http\Controllers;

use App\Http\Requests\Todo\StoreTodoRequest;
use App\Http\Requests\Todo\UpdateTodoRequest;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::query()->orderBy('created_at', 'desc')->get();
        return view('main.todo.index', compact('todos'));
    }

    public function create()
    {
        return view('main.todo.create');
    }

    public function store(StoreTodoRequest $request)
    {
        $request->validated();

        $todo = Todo::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return to_route('todo.index')->with('success', 'Data has been inserted!');
    }

    public function show(Todo $todo)
    {
        return view('main.todo.show', compact('todo'));
    }

    public function update(UpdateTodoRequest $request, Todo $todo)
    {
        $request->validated();
        $todo->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return to_route('todo.index')->with('success', 'Data has been updated!');
    }
}