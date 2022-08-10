
@extends('admin.layout.main')

@section('content')

    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">

                <h3 class="box-title text-bold">TABLE WITH users</h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Role</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$loop->index}}</td>
                                <td class="txt-oflo">{{$user->name}}</td>
                                <td class="txt-oflo"> @foreach($user->roles as $role)
                                        {{$role['name']}}
                                    @endforeach</td>
                                <td>
                                    <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                                        <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
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
