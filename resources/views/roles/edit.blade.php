@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{route('roles.index')}}">Edit Role</a>
                </div>
                <div class="panel-body">
                    <form action="{{route('roles.update', $role->id)}}" method="post">
                        {{csrf_field()}}
                        {{method_field('PATCH')}}
                        <div class="form-group">
                            <label for="name">Name*</label>
                            <input type="text" class="form-control" id="name" name="name" required value="{{$role->name}}">
                        </div>
                        <div class="form-group">
                            <label for="display_name">Display Name</label>
                            <input type="text" class="form-control" id="display_name" name="display_name" value="{{$role->display_name}}">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" id="description" name="description" value="{{$role->description}}">
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                @foreach($permissions as $permission)
                                <input class="form-check-input" type="checkbox" {{in_array($permission->id, $role_permission) ? "checked" : ""}} value="{{$permission->id}}" name="permissions[]"> {{$permission->name}} <br>
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
