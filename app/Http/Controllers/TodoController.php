<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Todo\StoreTodoRequest;
use App\Http\Requests\Todo\UpdateTodoRequest;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::query()->orderBy('created_at', 'desc')->where('is_complete', false)->get();
        $todoData = session('todoData', []);
        return view('main.todo.index', compact('todos', 'todoData'));
    }

    public function create()
    {
        return view('main.todo.create');
    }

    public function store(StoreTodoRequest $request)
    {
        $request->validated();

        /**
         * First, Save the request in DB
         */
        $todo = Todo::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        /**
         * Second, Save the request in Session
         */
        $todoData = session('todoData', []);
        $todoData[] = [
            'title' => $request->title,
            'description' => $request->description,
        ];
        session()->put('todoData', $todoData);

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

    public function destroy(Todo $todo)
    {
        $title = $todo->title;
        $todo->delete();
        return to_route('todo.index')->with('successDelete', "Task " . ucwords($title) . " has successfully deleted! ");
    }
}
