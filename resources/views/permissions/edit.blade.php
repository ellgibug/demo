@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-5">New permission</h1>
    <form method="POST" action="{{route('permissions.update', $permission->id)}}">
        {{ csrf_field() }}
        {{method_field('PATCH')}}
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name*</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" value="{{$permission->name}}"required>
            </div>
        </div>
        <div class="form-group row">
            <label for="display_name" class="col-sm-2 col-form-label">Display name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="display_name" name="display_name" value="{{$permission->display_name}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="description" name="description" value="{{$permission->description}}">
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
