<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>

<body>


    @include('partials.flash')
    @include('errors.list')

    <br><br><br><br><br>


    <div class="footer">
    @yield('footer')
        This is a footer with loads of pointless copyright information

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </div>

    <script> $('div.alert').not('.alert-important').delay(3000).slideUp(300);</script>


</body>



<?php
//This is the master page and the rule is to NEVER edit master. Only if you want the changes to apply site wide.
        //Master is a template that all the other pages on the website will follow if you reference it in your
        //code.

        //I have also added a script for any flash messages which will make all flash message that arent important
        //disappear within 5 seconds otherwise the important ones will need to be cleared by the user.
?>