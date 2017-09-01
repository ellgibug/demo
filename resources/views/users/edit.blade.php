@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="mb-3">Profile</h1>
    <div class="row">
        <div class="col-sm-4">
            <img src="{{$user->avatar->path}}" alt="puppy" class="img-thumbnail">
        </div>
        <div class="col-sm-8">
            <form action="{{route('users.update', $user->id)}}" method="post">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name*</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="avatar" class="col-sm-2 col-form-label">Avatar</label>
                    <div class="col-sm-10">
                        <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="avatar" name="avatar">
                            @foreach($avatars as $avatar)
                            <option value="{{$avatar->id}}" @if($user->avatar->id == $avatar->id) selected @endif>{{$avatar->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                @role('admin')
                <div class="form-group row">
                    <div class="col-sm-2">Roles</div>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <label class="form-check-label">
                                @foreach($roles as $role)
                                    <input class="form-check-input" type="checkbox" {{in_array($role->id, $role_user) ? "checked" : ""}} value="{{$role->id}}" name="roles[]"> {{$role->name}} <br>
                                @endforeach
                            </label>
                        </div>
                    </div>
                </div>
                @endrole
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
