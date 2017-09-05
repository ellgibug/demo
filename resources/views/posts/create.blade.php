@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-5">New post</h1>
        <form method="POST" action="{{ route('posts.store') }}">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="body" class="col-sm-2 col-form-label">Body</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="body" rows="5" name="body" style="resize: none"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

@endsection
