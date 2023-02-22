<form action="{{ route('todo.destroy', ['todo' => $todo->id]) }}" method="POST" id="deleteTodoForm"
    onsubmit="return confirm('Are you sure you want to delete the record?');">
    @csrf
    @method('DELETE')
    <button class="btn btn-outline-danger btn-sm" type="submit">Delete Task</button>
</form>
