@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Update {{ $tasks[0]->name }}
                </div>

                <div class="panel-body">
                    <!-- New Task Form -->
                    <form action="{{ route('task.update', $tasks[0]->id) }}" method="POST" class="form-horizontal">
                        @csrf
                        @method('patch')
                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Task</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="task-name" class="form-control" value=""
                                    required>
                            </div>
                        </div>

                        <!-- Update Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-btn fa-refresh"></i>Update Task
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <button class="btn btn-danger"><a style="text-decoration: none;color: white" href="{{ url('/') }}">Go
                    Back</a></button>
        </div>

    </div>
@endsection
