@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="mb-5">New role</h1>
    <form method="POST" action="{{ route('roles.store') }}">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name*</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="display_name" class="col-sm-2 col-form-label">Display name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="display_name" name="display_name">
            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="description" name="description">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">Permissions</div>
            <div class="col-sm-10">
                <div class="form-check">
                    <label class="form-check-label">
                        @foreach($permissions as $permission)
                            <input class="form-check-input" type="checkbox" value="{{$permission->id}}" name="permissions[]"> {{$permission->name}} <br>
                        @endforeach
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>





</div>
@endsection
