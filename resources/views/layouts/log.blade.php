<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <link rel="stylesheet" href="{{ asset('css/log.css') }}">
  <style>
      body{
        background-image: url("{{ asset('img/canongrid.png') }}");
        background-size: cover;
        background-position: 50% 50%
      }
  </style>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap');
    </style>
<style>
    body {
        font-family: 'Space Grotesk', sans-serif;
    }
</style>
</head>

<body>

    @yield('log')

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js" integrity="sha256-S6G5lg9rzC1JCAkx3dQFqP2lefkFxwlNVn0rWCOueXA="
    crossorigin="anonymous"></script>
  <script src="{{ asset('js/cartoon.js') }}"></script>

</body>

</html>
