<header>
    <nav>
        <ul>
            <li><a href="{{ route('main') }}">Main Page</a></li>
            <li><a href="{{ action('AppController@getAuthorPage') }}">Author</a></li>
            <li><a href="{{ action('AppController@getAdminPage') }}">Admin</a></li>
            <span id="separator"></span>
            @if(!Auth::check())
                <li><a href="{{ route('signup') }}">Sign Up</a></li>
                <li><a href="{{ route('signin') }}">Sign In</a></li>
            @else
                <li><a href="{{ route('logout') }}">Logout</a></li>
            @endif
        </ul>
    </nav>
</header>