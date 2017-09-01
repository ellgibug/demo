@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <a href="{{route('roles.create')}}" class="btn btn-outline-primary btn-sm mb-2 ml-auto mr-3">Add new role</a>
    </div>
    <table class="table table-sm table-striped table-bordered">
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
            <td><a href="{{route('roles.show', $role->id)}}">{{$role->name}}</a></td>
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

@endsection
