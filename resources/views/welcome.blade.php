<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
@include('layouts.header')
<link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
</head>

<body>
<script src="{{ asset('js/welcome.js') }}"></script>

<div class="one full-70 padding25">
    <h1 class="display-1 text-light text-center font-weight-bold">Hello, World!</h1>
    <h3 class="text-center font-weight-bold">This is a Laravel demo project.</h3>
</div>

<div class="full" id="page-menu" id="block-3">
    <div class="menu-bottom" id="menu-bottom">
        <div class="container">
            @role('admin')
                @include('layouts.admin-menu')
            @endrole
            <div class="d-flex p-2 flex-row justify-content-between align-items-stretch">
                <div class="p-2">
                    <h1 class="display-4"><a href="{{route('posts.index')}}">Posts</a></h1>
                </div>
                <div class="p-2">
                    <h1 class="display-4"><a href="#block-2">Block2</a></h1>
                </div>
                <div class="p-2">
                    <h1 class="display-4"><a href="#block-3">Block3</a></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-top" id="menu-top" style="display: none">
        @include('layouts.navbar')
    </div>
</div>

<div class="one full padding25" id="block-2">
<div class="container">
    <table class="table table-inverse">
        <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
        </tr>
        </tbody>
    </table>
</div>
</div>

<div class="three full padding25" >
    @if(Auth::check())
        <div class="container">
            {{--<h1 class="mb-5">New post</h1>--}}
            {{--<form method="POST" action="{{ route('posts.store') }}">--}}
                {{--{{ csrf_field() }}--}}
                {{--<div class="form-group row">--}}
                    {{--<label for="title" class="col-sm-2 col-form-label">Title</label>--}}
                    {{--<div class="col-sm-10">--}}
                        {{--<input type="text" class="form-control" id="title" name="title" required>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group row">--}}
                    {{--<label for="body" class="col-sm-2 col-form-label">Body</label>--}}
                    {{--<div class="col-sm-10">--}}
                        {{--<textarea class="form-control" id="body" rows="5" name="body" style="resize: none"></textarea>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group row">--}}
                    {{--<div class="col-sm-4">--}}
                        {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</form>--}}
        </div>
    @endif
</div>

<div class="full-50">
    <h1 class="display-1 text-light text-center font-weight-bold">Footer</h1>
    <h3 class="text-center font-weight-bold grey">of the demo project.</h3>
</div>

@include('layouts.scripts')

</body>
</html>
