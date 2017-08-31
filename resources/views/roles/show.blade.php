@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{route('roles.index')}}">Role</a>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <th scope="row">Name</th>
                            <td>{{$role->name}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Display name</th>
                            <td>{{$role->display_name}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Description</th>
                            <td>{{$role->description}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Permissions</th>
                            <td>
                                @foreach($permissions as $permission)
                                    @if(in_array($permission->id, $role_permission))
                                        {{$permission->name}}<br>
                                    @endif
                                @endforeach
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
