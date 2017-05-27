@extends('layout.layout')
@section('content')

    <div class="offset-md-3 col-sm-5 blog-main">
        <h2>Register to thank you</h2>
        <form method="POST" action="/register">
            {{csrf_field()}}
            <div class="form-group">
                <label for="user_login">Name</label>
                <input type="text" class="form-control" name="user_login" id="user_login" placeholder="Name" required>
            </div>
            <div class="form-group">
                <label for="user_email">Email</label>
                <input type="email" class="form-control" name="user_email" id="user_email" placeholder="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="password" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Password Confirmation</label>
                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="password confirmation" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-default">Register</button>
            </div>
            @include('layout.errors')
        </form>

    </div><!-- /.blog-main -->
@endsection