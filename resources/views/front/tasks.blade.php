@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Task
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    <!-- New Task Form -->

                    {{-- <form action="{{ url('create') }}" method="POST" class="form-horizontal"> --}}
                    <form action="{{ route('task.create') }}" method="POST" class="form-horizontal">
                        @csrf
                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Task</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="task-name" class="form-control" value=""
                                    required>
                            </div>
                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Add Task
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Current Tasks -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Current Tasks
                </div>

                <div class="panel-body">
                    <table class="table table-striped task-table">
                        <thead>
                            <th>Task</th>
                            <th>Created at</th>
                            <th>&nbsp;</th>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                                <tr>
                                    <td class="table-text">
                                        <div>{{ $task->name }}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{ $task->created_at }}</div>
                                    </td>

                                    <!-- Task Delete Button -->
                                    <td>
                                        <form action="{{ route('task.delete', $task->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure?')">
                                                <i class="fa fa-btn fa-trash"></i>Delete
                                            </button>
                                        </form>

                                        {{-- <a onclick="return confirm('Are you sure?')"
                                            href="{{ route('task.delete', $task->id) }}" class="btn btn-danger"><i
                                                class="fa fa-btn fa-trash"></i> Delete All</a> --}}
                                    </td>

                                    <td>
                                        <form action="{{ route('task.edit', $task->id) }}" method="POST">
                                            @csrf
                                            @method('put')
                                            <button type="submit" class="btn btn-info">
                                                <i class="fa fa-btn fa-pencil"></i>Edit
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        {{-- <form action="{{ route('task.update', $task->id) }}" method="POST">
                                            @csrf
                                            @method('patch')
                                            <button type="submit" class="btn btn-success">
                                                <i class="fa fa-btn fa-refresh"></i>Update
                                            </button> --}}

                                        <a href="{{ url('update_task', $task->id) }}" class="btn btn-success">
                                            <i class="fa fa-btn fa-refresh"></i>Update</a>


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
