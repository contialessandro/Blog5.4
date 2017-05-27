@extends('layout.layout')
@section('content')
    @include('layout.sidebar')
    <div class="col-sm-8 blog-main">

        <h1>{{$post->title}}</h1>
        <p>{{$post->body}}</p>
    <hr>
        <div class="comments">
            <ul class="list-group">

                @foreach($post->comments as $comment)

                    <li class="list-group-item">

                        <strong>{{ $comment->created_at->diffForHumans() }}: &nbsp;</strong>

                        {{ $comment->body}}

                    </li>

                @endforeach

            </ul>
        </div>
        @if(Auth::check())

            <div class="card">

                <div class="card-block">

                    <form method="post" action="/posts/{{$post->id}}/comments">

                        {{csrf_field()}}

                        <div class="form-group">

                            <textarea name="body" placeholder="Your comment" class="form-control" required></textarea>

                        </div>

                        <div class="form-group">

                            <button type="submit" class="btn btn-primary">Say Thank You</button>

                        </div>

                    </form>

                    @include('layout.errors')

                </div>

            </div>

        @endif
    </div><!-- /.blog-main -->



@endsection