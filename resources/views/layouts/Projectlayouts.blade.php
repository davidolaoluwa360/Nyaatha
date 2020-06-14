<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" type='html/text' charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" media="screen" href="{{URL::to('CSS/project.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{URL::to('CSS/generalheader.css')}}">
    <script src="https://kit.fontawesome.com/f7712776f7.js" crossorigin="anonymous"></script>
    <link rel='icon' href="{{URL::to('Images/Nyaata-logo.png')}}">
</head>

<body>
    @include('partials.masterheader')

    <div class="project container">
        @yield('ourproject')
    </div>

    <div class="project container">
        @yield('project-modal-pop-up')
    </div>

    @include('partials.masterfooter')
</body>
<script type='text/javascript' src="{{URL::to('JS/project.js')}}"></script>
<script type='text/javascript' src="{{URL::to('JS/home.js')}}"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init();
</script>

</html>