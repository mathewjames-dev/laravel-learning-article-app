@if (Auth::check())
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">RandomName</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="/profile">Profile</a></li>
                    <li><a href="/auth/logout">Logout</a></li>
                    <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Articles
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/articles">All Articles</a></li>
                        <li><a href="/articles/create">Create Article!</a></li>
                    </ul></li>
                </ul>
            </div>
        </div>
    </nav>
@else
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">RandomName</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="/auth/login">Login</a></li>
                    <li><a href="/auth/register">Register</a></li>
                    <li><a href="/articles">Articles</a></li>
                </ul>
            </div>
        </div>
    </nav>
@endif
<?php
//This page is just a simple nav bar made with html. I use this page on the blade as the include so anywhere i
        //need to put the navbar i can just use include and reference  this page, it is a lot simpler than
        //writing the code again and again.
?>