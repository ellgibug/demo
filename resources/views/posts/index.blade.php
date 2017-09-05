@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <a href="{{route('posts.create')}}" class="btn btn-outline-primary btn-sm mb-2 ml-auto mr-3">Add new post</a>
        </div>
        @foreach($posts as $post)
            <h4><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></h4>
            <p><strong>{{$post->user->name}}</strong></p>
            <p class="text-justify">
                {{\strlen($post->body) > 1000 ? \substr($post->body, 0, 1000).' (view more...)' : $post->body}}
            </p>
        <hr>
        @endforeach

                        {{--<a href="{{route('edit.blade.php', $post->id)}}">Edit</a>--}}
                    {{----}}
                        {{--<form action="{{route('posts.destroy', $post->id)}}" method="post">--}}
                            {{--{{csrf_field()}}--}}
                            {{--{{method_field('DELETE')}}--}}
                            {{--<button type="submit" class="btn-link">Delete</button>--}}
                        {{--</form>--}}



    </div>

@endsection
