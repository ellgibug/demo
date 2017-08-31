@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul>
                        <li><a href="{{route('permissions.index')}}">Permissions</a></li>
                        <li><a href="{{route('roles.index')}}">Roles</a></li>
                        <li><a href="{{route('users.index')}}">Users</a></li>
                        <li><a href="{{route('posts.index')}}">Posts</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
