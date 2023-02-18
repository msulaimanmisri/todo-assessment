@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="col-6 mx-auto">
            <form action="{{ route('todo.update', ['todo' => $todo->id]) }}" method="POST" class="form-group">
                @csrf
                @method('PATCH')
                <div class="todo-title mb-3">
                    <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                    <input type="text" name="title" value="{{ old('title', $todo->title) }}"
                        class="form-control text-muted @error('title') is-invalid @enderror">
                    @error('title')
                        <span class="form-text text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="todo-description mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control text-muted @error('description') is-invalid @enderror" id=""
                        cols="30" rows="3">{{ old('description', $todo->description) }}</textarea>
                    @error('description')
                        <span class="form-text text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="todo-cta">
                    <button class="btn btn-primary" type="submit">Update Task</button>
                    <a href="{{ route('todo.index') }}" class="btn text-muted">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
