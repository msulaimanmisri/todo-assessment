@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="heroSection">
            <h1 class="display-3">Todo Application</h1>
            <a href="{{ route('todo.create') }}" class="btn btn-primary btn-sm mt-3">Add New Todo</a>
        </div>

        <div class="todoAlert mt-3">
            @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>

        <div class="todo-table mt-4">
            <table class="table table-border bg-white rounded-3 p-3 shadow-sm">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($todos as $todo)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ ucfirst($todo->title) }}</td>
                            <td>{{ $todo->description == true ? $todo->description : '-' }}</td>
                            <td>
                                <a href="{{ route('todo.show', ['todo' => $todo->id]) }}"
                                    class="btn btn-outline-primary btn-sm">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
