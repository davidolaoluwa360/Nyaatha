<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="content-type" type='html/text' charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" media="screen" href="{{URL::to('CSS/whoweworkfor.css')}}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{URL::to('CSS/generalheader.css')}}">
        <script src="https://kit.fontawesome.com/f7712776f7.js" crossorigin="anonymous"></script>
    </head>
    <body>
      @include('partials.masterheader')

      <div class="who we serve container">
        @yield('who we serve')
      </div>

      @include('partials.masterfooter')
    </body>
    </html>
