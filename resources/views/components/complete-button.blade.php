<form action="{{ route('todo.complete.update', ['todo' => $todo->id]) }}" method="POST" id="completeTheTaskForm"
    onsubmit="return confirm('Are you sure you want to complete the task?');">
    @csrf
    @method('PATCH')

    <button class="btn btn-outline-success btn-sm" type="submit">Complete</button>
</form>
