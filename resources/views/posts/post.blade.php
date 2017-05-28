<div class="blog-post">
    <h2 class="blog-post-title">
        <a href="/posts/{{$post->id}}">{{$post->title}}</a>
    </h2>
    <p class="blog-post-meta">
        @if(Auth::check())
        @endif
        {{$post->created_at->toFormattedDateString()}}
    </p>

    <p>{{$post->body}}</p>
    <hr>

</div><!-- /.blog-post -->