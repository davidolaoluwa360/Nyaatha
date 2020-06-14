<div class="Navbar">

    <div class="Navbar__Link Navbar__Link-brand">
        <a href="{{route('user.home.view')}}"><img src="{{URL::to('Images/Nyaata-logo.png')}}" alt="Nyaathalogo"></a>
    </div>

    <div class="Navbar__Link Navbar__Link-toggle">
        <i class="fas fa-bars"></i>
    </div>

    <nav class="Navbar__Items Navbar__Items--right">
        <div class="Navbar__Link home">
            <a href="{{route('user.home.view')}}">HOME</a>
        </div>

        <div class="Navbar__Link">
            <a href="{{route('Who.we.are.view')}}">WHO WE SERVE</label></a>
        </div>

        <div class="Navbar__Link">
            <a href="{{route('nyaatha.testimonial.view')}}">TESTIMONIALS</a>
        </div>

        <div class="Navbar__Link">
            <a href="{{route('nyaatha.project')}}">PROJECTS</a>
        </div>

        <div class="Navbar__Link">
            <a href="{{route('Donate.view')}}">DONATE</a>
        </div>

    </nav>
</div>