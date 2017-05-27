@extends('layout.layout')
@section('content')

    <div class="offset-md-3 col-sm-5 blog-main">
        <h2>Login </h2>
        <form method="POST" action="/login">
            {{csrf_field()}}
            <div class="form-group">
                <label for="user_email">Email</label>
                <input type="text" class="form-control" name="user_email" id="user_email" placeholder="Name" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="password" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-default">Login</button>
            </div>
            @include('layout.errors')
        </form>

    </div><!-- /.blog-main -->
@endsection