@extends('layouts.app')

@section('title')
    Index
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ route('tasks.create') }}" class="btn btn-primary btn-sm">Create</a>
            <div class="card mt-2">
                <div class="card-header">
                    Your Task
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>*</th>
                                <th>Task</th>
                                <th>Slug</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $result)    
                            <tr>
                                <td>*</td>
                                <td>{{ $result->name_task }}</td>
                                <td>{{ $result->slug }}</td>
                                <td>
                                    <form action="{{ route('tasks.destroy', $result->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('tasks.edit', $result->id) }}" class="btn btn-info btn-sm">Edit</a>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection