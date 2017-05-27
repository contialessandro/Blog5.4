@extends('layout.layout')
@section('content')
    @include('layout.sidebar')
    <div class="col-sm-8 blog-main">
    <h2>create new post</h2>
        <form method="POST" action="/posts">
            {{csrf_field()}}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="title" required>
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <input type="text" class="form-control" name="body" id="body" placeholder="body" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
            @include('layout.errors')
        </form>

    </div><!-- /.blog-main -->



@endsection