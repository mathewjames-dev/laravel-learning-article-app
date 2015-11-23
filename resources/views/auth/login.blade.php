@extends ('master')
<header class="col-md-4">
<div class="navbar">
    <div class="col-md-4">
        <ul class="nav">
            <li><a href="/">Home</a></li>
            <li><a href="/auth/register/">Register</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/articles">Articles</a></li>
        </ul>
    </div>
</div>
</header>

@section ('content')

    <form method="POST" action="{{ action('Auth\AuthController@postLogin') }}">
        {!! csrf_field() !!}

        <div>
            Username
            <input type="text" name="username" value="{{ old('name') }}">
        </div>


        <div>
            Password
            <input type="password" name="password">
        </div>

        <div>
            <input type="checkbox" name="remember"> Remember Me
        </div>

        <div>
            <button type="submit">Login</button>
        </div>
    </form>
@stop