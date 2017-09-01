@extends('layouts.app')

@section('content')

<div class="container">
    <dl class="row">
        <dt class="col-sm-3">Name</dt>
        <dd class="col-sm-9">{{$role->name}}</dd>

        <dt class="col-sm-3">Display name</dt>
        <dd class="col-sm-9">{{$role->display_name}}</dd>

        <dt class="col-sm-3">Description</dt>
        <dd class="col-sm-9">{{$role->description}}</dd>

        <dt class="col-sm-3">Permissions</dt>
        <dd class="col-sm-9">
            @foreach($permissions as $permission)
                @if(in_array($permission->id, $role_permission))
                    {{$permission->name}}
                @endif
            @endforeach
        </dd>
    </dl>
</div>

@endsection
