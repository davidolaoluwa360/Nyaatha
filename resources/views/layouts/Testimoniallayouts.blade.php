<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="content-type" type='html/text' charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" media="screen" href="{{URL::to('CSS/testimonial.css')}}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{URL::to('CSS/generalheader.css')}}">
        <script src="https://kit.fontawesome.com/f7712776f7.js" crossorigin="anonymous"></script>
        <link rel='icon' href="{{URL::to('Images/Nyaata-logo.png')}}">
    </head>
    <body>
      @include('partials.masterheader')

      <div class="testimonial container">
        @yield('ourtestimonial')
      </div>

      @include('partials.masterfooter')
    </body>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    </html>
