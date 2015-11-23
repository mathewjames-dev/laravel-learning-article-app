@extends ('master')
<header class="col-md-4">
    @include('header')
</header>
@section('content')
    <div id="content" class="col-md-8">
    <h1>Welcome to the home page!</h1>
        <hr></hr>
</div>
@stop
<?php
//This Page is the home page, it is very bare at the moment but we are using that include to make sure the
        //nav bar is on the page and we are using the extend to get all the detailing from the master page aswell
        //we are using the section to specify where our content section is.
?>