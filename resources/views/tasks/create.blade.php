@extends('app')

@section('content')
    <div class="container">
        <h2 class="mb-4">Add a New Task</h2>
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Task Title</label>
                <input type="text" class="form-control" name="title" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Task</button>
        </form>
    </div>
@endsection

