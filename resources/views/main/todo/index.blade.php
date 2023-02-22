@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="heroSection">
            <h1 class="display-3">Todo Application</h1>
            <button class="btn btn-primary btn-sm mt-3" id="hide-show-form">Add New Task</button>
        </div>

        <div class="todoShow mt-3">
            <div class="card p-4 shadow-sm border-0">
                @include('main.todo.create')
            </div>
        </div>

        <div class="todoAlert mt-3">
            @include('components.session-msg')
        </div>

        <div class="todo-table mt-4">
            <table class="table table-border bg-white rounded-3 p-3 shadow-sm">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($todos as $todo)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ ucfirst($todo->title) }}</td>
                            <td>{{ $todo->description == true ? $todo->description : '-' }}</td>
                            <td class="d-flex gap-1 justify-content-center">
                                @include('components.edit-button')
                                @include('components.delete-button')
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center text-muted py-5" colspan="12">
                                No data. Please insert your Task
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
