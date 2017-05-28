
<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="/">Home</a>
            <a class="nav-link" href="/login">Login</a>
            <a class="nav-link" href="/register">Register</a>
            <a class="nav-link" href="/posts/create">create</a>
            @if(Auth::check())
                <a class="pull-right nav-link" href="/logout">Logout {{ Auth::user()->name }}</a>
            @endif
        </nav>
    </div>
</div>