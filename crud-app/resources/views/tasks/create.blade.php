@extends('layouts.app')

@section('title')
    Create
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Create Your Task
                </div>
                <div class="card-body">
                    <form action="{{ route('tasks.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="task" class="form-label">
                                Task
                            </label>
                            <input type="text" class="form-control" name="name_task" id="task" 
                            placeholder="Yout Task" value="{{ old('name_task') }}">
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-primary btn-sm">Create Task</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection