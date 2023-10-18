<!DOCTYPE html>
<html">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'myproject') }}</title>
        <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">

    </head>
    <style>
        /* body {
            background-color: #e2eff7;
        } */
    </style>
    <body class="bg-light">
        @include('layouts.navbar')
        @yield('content')
    </body>

    </html>
