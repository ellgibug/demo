@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row mb-5"></div>
        <table class="table table-sm table-striped table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Roles</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>
                        <img src="{{$user->avatar->path}}" alt="user_preview" class="rounded-circle" width="4.5%" height="10%">
                        {{$user->name}}
                    </td>
                    <td>
                        @foreach($user->roles as $role)
                            {{$role->name}}<br>
                        @endforeach
                    </td>
                    <td>
                        @if(!$user->hasRole('admin'))
                            <a href="{{route('users.edit', $user->id)}}">Edit</a>
                        @endif
                    </td>
                    <td>
                        @if(!$user->hasRole('admin'))
                            <form action="{{route('users.destroy', $user->id)}}" method="post">
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
