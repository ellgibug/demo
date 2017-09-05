@extends('layouts.app')

@section('content')
    <div class="container">
        <label class="custom-control custom-radio">
            <input id="radio1" name="radio" type="radio" class="custom-control-input" checked>
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Show post</span>
        </label>
        <label class="custom-control custom-radio">
            <input id="radio2" name="radio" type="radio" class="custom-control-input">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Edit post</span>
        </label>
        <hr>
        <div id="show">
            <h4 id="title">{{$post->title}}</h4>
            <p><strong>{{$post->user->name}}</strong></p>
            <p class="text-justify" id="body">{{$post->body}}</p>
        </div>
        <div id="edit" class="d-none">
            <form action="{{route('posts.update', $post->id)}}" method="post">
                {{ csrf_field() }}
                {{method_field('PATCH')}}
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}"required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="body" class="col-sm-2 col-form-label">Body</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="body" rows="10" name="body" style="resize: none">{{$post->body}}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
            <hr>
            <form action="{{route('posts.destroy', $post->id)}}" method="post">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <div class="form-group row">
                    <button type="submit" class="btn btn-danger" id="delete-btn">Delete</button>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $("input[name=radio]").change(function () {
                $('#show').toggleClass('d-none');
                $('#edit').toggleClass('d-none');
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $("#delete-btn").click(function () {
                return confirm ('Are you you want to delete this post?');
            });
        });
    </script>
@endsection

