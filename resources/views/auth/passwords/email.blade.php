@extends('layouts.app')

@section('content')
<div class="container">

    <h1 class="text-center mb-5">Reset Password</h1>
    <form method="POST" action="{{ route('password.email') }}">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" required autofocus>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4">
                <button type="submit" class="btn btn-primary">Password Reset</button>
            </div>
        </div>
    </form>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

</div>
@endsection
