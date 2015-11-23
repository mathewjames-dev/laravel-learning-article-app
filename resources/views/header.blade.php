@if (Auth::check())
<div class="navbar">
    <div class="col-md-4">
        <ul class="nav">
            <li><a href="/">Home</a></li>
            <li><a href="/profile">Profile</a></li>
            <li><a href="/auth/logout">Logout</a></li>
            <li><a href="/articles">Articles</a></li>
        </ul>
    </div>
</div>
@else
<div class="navbar">
    <div class="col-md-4">
        <ul class="nav">
            <li><a href="/">Home</a></li>
            <li><a href="/auth/login">Login</a></li>
            <li><a href="/auth/register/">Register</a></li>
            <li><a href="/articles">Articles</a></li>
        </ul>
    </div>
</div>
@endif
<?php
//This page is just a simple nav bar made with html. I use this page on the blade as the include so anywhere i
        //need to put the navbar i can just use include and reference  this page, it is a lot simpler than
        //writing the code again and again.
?>