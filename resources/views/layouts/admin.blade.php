<!DOCTYPE html>
<html">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'myproject') }}</title>
        <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
        <style>
           
        </style>
    </head>

    <body class="bg-light">
        @include('dashboard.admin.navbar')
        @yield('content')
    </body>

    </html>
