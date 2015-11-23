<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>

<body>

    <div class ="container" class ='col-md-8'>
        @yield('content')
    </div>

    <br><br><br><br><br>

    <div class="footer">
    @yield('footer')
        This is a footer with loads of pointless copyright information
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>

<?php
//This is the master page and the rule is to NEVER edit master. Only if you want the changes to apply site wide.
        //Master is a template that all the other pages on the website will follow if you reference it in your
        //code.
?>