@extends ('master')
<header class="col-md-4">
    <div class="navbar">
        <div class="col-md-4">
            <ul class="nav">
                <li><a href="/">Home</a></li>
                <li><a href="/auth/login">Login</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/articles">Articles</a></li>
            </ul>
        </div>
    </div>

</header>
@section('content')

<form method="POST" action="{{ action('Auth\AuthController@postRegister') }}">
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
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>
@stop