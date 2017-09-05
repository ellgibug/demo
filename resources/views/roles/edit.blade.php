@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-5">Edit role</h1>
    <form action="{{route('roles.update', $role->id)}}" method="post">
        {{csrf_field()}}
        {{method_field('PATCH')}}
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name*</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" value="{{$role->name}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="display_name" class="col-sm-2 col-form-label">Display name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="display_name" name="display_name" value="{{$role->display_name}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="description" name="description" value="{{$role->description}}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">Permissions</div>
            <div class="col-sm-10">
                <div class="form-check">
                    <label class="form-check-label">
                        @foreach($permissions as $permission)
                        <input class="form-check-input" type="checkbox" {{in_array($permission->id, $role_permission) ? "checked" : ""}} value="{{$permission->id}}" name="permissions[]"> {{$permission->name}} <br>
                        @endforeach
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection
