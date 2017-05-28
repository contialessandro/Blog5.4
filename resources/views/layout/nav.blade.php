
<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="/">Home</a>
            @if(!Auth::check())
                <a class="nav-link" href="/login">Login</a>
            @endif
            @if(Auth::check())
                <a class="pull-right nav-link" href="/logout">Logout {{ Auth::user()->name }}</a>
            @endif
        </nav>
    </div>
</div>