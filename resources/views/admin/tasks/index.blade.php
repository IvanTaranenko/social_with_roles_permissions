
@extends('admin.layout.main')

@section('content')

<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="white-box">

            <h3 class="box-title text-bold">TABLE WITH TASKS</h3>
            @can('tasks.create')
            <div class="pull-right" style="margin-bottom: 20px;right: auto">
                <a class="btn btn-success" href="{{ route('tasks.create') }}" > Create New Task</a>
            </div>
            @endcan
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Details</th>
                        <th width="280px">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $loop->index }}</td>
                        <td class="txt-oflo">{{ $task->name }}</td>
                        <td class="txt-oflo">{{ \Str::limit($task->description, 300) }}</td>
                        <td>
                            <form action="{{ route('tasks.destroy',$task->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('tasks.show',$task->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('tasks.edit',$task->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
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
