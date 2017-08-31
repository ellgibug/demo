@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{route('users.index')}}">Edit User</a>
                </div>
                <div class="panel-body">
                    <form action="{{route('users.update', $user->id)}}" method="post">
                        {{csrf_field()}}
                        {{method_field('PATCH')}}
                        <div class="form-group">
                            <label for="name">Name*</label>
                            <input type="text" class="form-control" id="name" name="name" required value="{{$user->name}}">
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                @foreach($roles as $role)
                                <input class="form-check-input" type="checkbox" {{in_array($role->id, $role_user) ? "checked" : ""}} value="{{$role->id}}" name="roles[]"> {{$role->name}} <br>
                                @endforeach
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
