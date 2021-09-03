@extends('layouts.app')

@section('title')
    Edit
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Edit Your Task
                </div>
                <div class="card-body">
                    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="task" class="form-label">
                                Task
                            </label>
                            <input type="text" class="form-control" name="name_task" id="task" 
                            placeholder="Yout Task" value="{{ old('name_task', $task->name_task) }}">
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-primary btn-sm">Edit Task</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection