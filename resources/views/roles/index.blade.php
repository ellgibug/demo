@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{route('home')}}">Roles</a>
                    <a href="{{route('roles.create')}}" class="pull-right">Add new role</a>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($roles as $role)
                        <tr>
                            <th scope="row">{{$role->id}}</th>
                            <td>{{$role->name}}</td>
                            <td>
                                @if($role->name!='user' AND $role->name!='admin')
                                <a href="{{route('roles.edit', $role->id)}}">Edit</a>
                                @endif
                            </td>
                            <td>
                                @if($role->name!='user' AND $role->name!='admin')
                                <form action="{{route('roles.destroy', $role->id)}}" method="post">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                    <button type="submit" class="btn-link">Delete</button>
                                </form>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
