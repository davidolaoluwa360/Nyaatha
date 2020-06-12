<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="content-type" type='html/text' charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <meta content='Nyaatha Education Endowment Funds' author=''>
        <link rel="stylesheet" type="text/css" media="screen" href="{{URL::to('CSS/home.css')}}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{URL::to('CSS/generalheader.css')}}">
        <script src="https://kit.fontawesome.com/f7712776f7.js" crossorigin="anonymous"></script>
        <link rel='icon' href="{{URL::to('Images/Nyaata-logo.png')}}">
    </head>
    <body>

      <div class='container'>
        @include('partials.masterheader')
      </div>

      <div class="container">
        @yield('homewhoweare')
      </div>

      <div class="container">
        @yield('homeourvision&mission')
      </div>

      <div class="container">
        @yield('ourprogamstatdata')
      </div>

      <div class="container">
        @yield('nyaathaimage')
      </div>

      <div class="container">
          @yield('ourleadership')
      </div>

      <div class='container'>
        @yield('our-leadership-modal-pop-up')
      </div>

      <div class="container">
        @yield('ourpartners')
      </div>

      <div class="container">
        @yield('contactus layer')
      </div>

      @include('partials.masterfooter')
    </body>
    <script type='text/javascript' src="{{URL::to('JS/Ourgeneral.js')}}"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    </html>
