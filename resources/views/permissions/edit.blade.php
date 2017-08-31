@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{route('permissions.index')}}">Edit Permission</a>
                </div>
                <div class="panel-body">
                    <form action="{{route('permissions.update', $permission->id)}}" method="post">
                        {{csrf_field()}}
                        {{method_field('PATCH')}}
                        <div class="form-group">
                            <label for="name">Name*</label>
                            <input type="text" class="form-control" id="name" name="name" required value="{{$permission->name}}">
                        </div>
                        <div class="form-group">
                            <label for="display_name">Display Name</label>
                            <input type="text" class="form-control" id="display_name" name="display_name" value="{{$permission->display_name}}">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" id="description" name="description" value="{{$permission->description}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
