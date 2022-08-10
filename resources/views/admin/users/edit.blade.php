@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger mt-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    </div>



        <form method="post" action="{{route('users.update', $user->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" value="{{$user->name}}" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Role</label>
                <select name="role_id" class="form-control" id="exampleFormControlSelect2">
                    @foreach($roles as $role)
                        <option value="{{$role['id']}}" @if($user->hasRole($role['name'])) selected @endif>{{$role['name']}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
@endsection

