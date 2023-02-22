<form action="{{ route('todo.complete.update', ['todo' => $todo->id]) }}" method="POST" id="completeTheTaskForm"
    onsubmit="return confirm('Are you sure you want to complete the task?');">
    @csrf
    @method('PATCH')
</form>

<button class="btn btn-outline-success btn-sm" type="submit" form="completeTheTaskForm">Complete</button>
