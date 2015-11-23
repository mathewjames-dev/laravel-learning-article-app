@extends('master')

    <header class="col-md-4">
        @include('header')
    </header>
@section('content')
    <?php
            //This page just gets the function for the contact page from the staticController file.
            //On this page is will output the variables we named inside of the function and just display them
            //This isnt from a database as we just named the variables in the function for contact.
    ?>
    <h1>Contact me:</h1>

    <hr></hr>
    <ul>
        Name: <b>{{$firstname}} {{$secondname}}</b>
        <br>
        Email: <b>{{$email}}</b>
        <br>
        Phone: <b>{{$phone}}</b>
        <br>
        Other: <b>I have Instagram, Twitter, LinkedIn and Facebook, message me privately for any of those.</b>
    </ul>
@stop

