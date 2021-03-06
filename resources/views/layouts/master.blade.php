<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sayproject')</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

    <style>
        @import url(//fonts.googleapis.com/css?family=Lato:700);
        html, body {
            height: 100%;
        }

        body {
            padding: 0;
            width: 100%;
            font-weight: 100;
            font-family: 'Lato';
            position: absolute;
        }

        .board_box_up {
            width: 100px;
            height: 20px;
            display: block;
            background-color: red;
            margin: 3px;
            margin-left: 30%;
        }

        .board_box_down {
            width: 100px;
            height: 20px;
            display: block;
            background-color: blue;
            margin: 3px;
            margin-left: 30%;
        }

        .board_box_neutral {
            width: 100px;
            height: 20px;
            display: block;
            background-color: gray;
            margin: 3px;
            margin-left: 30%;
        }

        .container {
            text-align: center;
            display: box;
            position: relative;
            width: 100%;
            height: 30%;
            padding-top: 13%;
        }

        .board_container {
            text-align: center;
            display: inline-block;
            width: 100%;
        }

        .content {
            text-align: center;
            display: inline-block;
            font-size: 20px;
            margin: 0 5% 0 5%;
        }

        .content_block {
            display: inline-block;
            font-size: 30px;
            margin: 0 5% 0 5%;
        }

        .button_block {
            display: inline-block;
            font-size: 15px;
            margin: 0 1% 0 1%;
        }

        .comment_block {
            display: inline-block;
            width: 30%;
            height: 100px
            font-size: 25px;
            margin: 0 1% 0 1%;
        }

        a:visited {
            text-decoration: none;
        }

        a:hover {
            text-decoration: none;
        }

        .title {
            vertical-align: text-top;
            font-size: 56px;
            margin-bottom: 20px;
        }

        .block {
            margin-top: 5%;
            display: inline-block;;
        }
    </style>
</head>
<body id="splash">

@include('layouts.header')

{{--
@section('sidebar')
    This is the master sidebar.
@show
--}}

<div class="container">
    @yield('content')
</div>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</body>
</html>
