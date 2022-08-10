
@extends('admin.layout.main')

@section('content')

    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">

                <h3 class="box-title text-bold">TABLE WITH TASKS</h3>
                @can('add task')
                <div class="pull-right" style="margin-bottom: 20px;right: auto">
                    <a class="btn btn-success" href="{{ route('roles.create') }}" > Create New Role</a>
                </div>
                @endif
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($roles as $role)
                            <tr>
                                <td>{{$loop->index}}</td>
                                <td class="txt-oflo">{{$role->name}}</td>

                                <td>
                                    <form action="{{ route('roles.destroy',$role->id) }}" method="POST">
                                        <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
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
