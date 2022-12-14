@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Role</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('roles.update',$role->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $role->name }}" class="form-control" placeholder="Name">
                </div>
                @foreach($permissions as $permission)

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="permissions[]" value="{{$permission->id}}" @if($role->hasPermissionTo($permission->name)) checked @endif id="flexCheckIndeterminate{{$permission->id}}">
                        <label class="form-check-label" for="flexCheckIndeterminate{{$permission->id}}">
                            {{$permission->name}}
                        </label>
                    </div>
                @endforeach
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection

