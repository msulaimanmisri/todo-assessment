<form action="{{ route('todo.destroy', ['todo' => $todo->id]) }}" method="POST" id="deleteTodoForm"
    onsubmit="return confirm('Are you sure you want to delete the record?');">
    @csrf
    @method('DELETE')
</form>

<button class="btn btn-outline-danger btn-sm" type="submit" form="deleteTodoForm">Delete Task</button>
