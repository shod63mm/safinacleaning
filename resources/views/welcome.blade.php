<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
        <title>Laravel</title>
    </head>
    <body class="bg-gradient-to-r from-red-500 via-purple-400 to-blue-500">

      <div class="container mx-auto">

        @include('header')

        <h1 class="font-normal text-5xl text-white text-center leading-tight mx-2">Привет! Меня зовут<br>
          <span class="font-bold">Шодмехр Махмуди</span> </h1>
        

      </div>
      @include('twosection')

    </body>
</html>
