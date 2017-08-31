@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">
    <a href="{{route('permissions.create')}}" class="btn btn-outline-primary btn-sm mb-2 ml-auto mr-3">Add new permission</a>
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
        @foreach($permissions as $permission)
        <tr>
            <th scope="row">{{$permission->id}}</th>
            <td>{{$permission->name}}</td>
            <td>
                <a href="{{route('permissions.edit', $permission->id)}}">Edit</a>
            </td>
            <td>
                <form action="{{route('permissions.destroy', $permission->id)}}" method="post">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                    <button type="submit" class="btn-link" disabled >Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
