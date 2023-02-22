@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="heroSection">
            <h1 class="display-3">Your Completed Task</h1>
            <a href="{{ route('todo.index') }}" class="btn btn-primary btn-sm mt-3">Back to the Homepage</a>
        </div>

        <div class="todo-table mt-4">
            <table class="table table-border bg-white rounded-3 p-3 shadow-sm">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($todos as $todo)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ ucfirst($todo->title) }}</td>
                            <td>{{ $todo->description == true ? $todo->description : '-' }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center text-muted py-5" colspan="12">
                                No task completed yet.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
