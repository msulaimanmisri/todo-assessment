<form action="{{ route('todo.store') }}" method="POST" class="form-group">
    @csrf
    <div class="todo-title mb-3">
        <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
        <input type="text" name="title" value="{{ old('title') }}"
            class="form-control text-muted @error('title') is-invalid @enderror">
        @error('title')
            <span class="form-text text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="todo-description mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" class="form-control text-muted @error('description') is-invalid @enderror" id=""
            cols="30" rows="3">{{ old('description') }}</textarea>
        @error('description')
            <span class="form-text text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="todo-cta">
        <button class="btn btn-outline-primary btn-sm" type="submit">Create Task</button>
    </div>
</form>
