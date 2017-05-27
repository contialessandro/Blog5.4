<div class="col-sm-3 blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <h4>About</h4>
        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
    </div>
    <div class="sidebar-module">
        <h4>Archives</h4>
        <ol class="list-unstyled">
            <li><a href="#">Back to intranet website</a></li>
        </ol>
    </div>
    <div class="sidebar-module">
        <h4>Elsewhere</h4>
        <ol class="list-unstyled">
            <li><a href="#">Wall</a></li>
            <li><a href="#">Actius</a></li>
            @if(Auth::check())
                <li><a href="/logout">Logout</a> {{ Auth::user()->user_login }}</li>
            @endif
        </ol>
    </div>
</div><!-- /.blog-sidebar -->