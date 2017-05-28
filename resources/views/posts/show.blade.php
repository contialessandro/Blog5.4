@extends('layout.layout')
@section('content')

    <div class="col-sm-12 blog-main">

        <h1>{{$post->title}}</h1> @if(Auth::check())
            {{ $post->user->name }} wrote
        @endif
        <p>{{$post->body}}</p>
    <hr>
        <div class="comments">
            <ul class="list-group">

                @foreach($post->comments as $comment)

                    <li class="list-group-item">

                        <strong>{{ $comment->created_at->diffForHumans() }}
                            @if(Auth::check())
                                {{ $comment->post->user->name }} wrote: <br>
                            @endif
                        </strong>
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