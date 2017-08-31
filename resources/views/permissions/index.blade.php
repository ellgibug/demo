@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{route('home')}}">Permissions</a>
                    <a href="{{route('permissions.create')}}" class="pull-right">Add new permission</a>
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
            </div>
        </div>
    </div>
</div>
@endsection
