@extends('layouts.Homelayouts')

@section('title','Nyaatha|Home')

@section('homewhoweare')
<section class="who-we-are-home-general-outer-container">

    <div class="who-we-are-Dheader-selectors">
        <span>Organization</span>
        <h1>FOUNDATION</h1>
    </div>

    <div class="who-we-are-inner-container-selector">

        <div class="who-we-are-left-container">
            <img src="{{URL::to('Images/WhatsApp Image 2020-05-18 at 8.26.15 PM.jpeg')}}">
        </div>

        <div class="who-we-are-right-container">
            <div class="who-we-are-header-selector header-header">
                <span class='devision-header-header-general'>Who We Are</span>
            </div>

            <div class="top-small-content">
                <p>Nyaatha which means Mother of Mercy is a name given to Blessed Sr. Irene Stefani,
                    a member of the congregation of Consolata Sisters of the Catholic Church
                    who worked among the people of Central part of Kenya. Nyaatha was given because of her
                    charitable work among the poor, the afflicted and the sick that she served with a
                    smile in the early 1900s. She became a Ray of Hope for them.</p>

                <p>Her work inspired the congregation of the Assumption Sisters of Eldoret (A.S.E.),
                    Kenya. Through the initiative of one of the members Sr. Angela Adhiambo A.S.E.,
                    a trust fund by the name Nyaatha Education Endowment Fund (N.E.E.F.) was founded
                    in July 2015 to provide for the post-primary educational needs of the disadvantaged
                    children transitioning from rehabilitation centres; those from disparate backgrounds
                    and girls at risk.</p>
            </div>

        </div>
    </div>
</section>
@endsection

@section('homeourvision&mission')
<section class="our-mission-vission-general-outer-container">
    <div class="our-mission-vission-inner-container">

        <div class="our-mission-vission-left-container-selector">
            <img src="{{URL::to('Images/WhatsApp Image 2020-05-18 at 8.26.19 PM.jpeg')}}">
        </div>

        <div class="our-mission-vission-right-container-selector">

            <div class="our-mission-vission-header-text header-header">
                <span class='devision-header-header-general'>Our Mission & Vision Statements.The Fundamentals.</span>
            </div>

            <div class="Dvission-vision-selector" style='overflow: hidden'>

                <div class="Dvission-vision-left-selector Dvission-vision-select" data-aos="fade-right"
                    data-aos-duration='600' data-aos-once='true'>
                    <span class='devision-header-header'>Our Mission</span>
                    <p>To provide for the post-primary education needs of:</p>
                    <ol>
                        <li>Disadvantaged children transitioning from rehabilitation centres</li>
                        <li>Children from disparate backgrounds</li>
                        <li>Disadvantaged girls at risk</li>
                    </ol>
                </div>

                <div class="Dvission-vision-right-selector Dvission-vision-select" data-aos="fade-right"
                    data-aos-duration='600' data-aos-delay='500' data-aos-once='true'>
                    <span class='devision-header-header'>Our Vision</span>
                    <p>Instilling hope in disadvantaged children in the footsteps of blessed Irene Stefani</p>
                </div>

                <div class="DOur-Aim-left-selector Dvission-vision-select" data-aos="fade-up" data-aos-duration='600'
                    data-aos-delay='400' data-aos-once='true'>
                    <span class='devision-header-header'>Our Aim</span>
                    <p>The fund aims to provide for the post primary educational needs of disadvantaged boys
                        transitioning from the two institutions run by the ASE; Kwetu Home of Peace (KHOP) and Morning
                        Star Childrens’ Centre, as well as disadvantaged girls at risk, brought to its attention.</p>
                </div>

                <div class="Dvalues-right-selector Dvission-vision-select" data-aos="fade-right" data-aos-duration='600'
                    data-aos-delay='300' data-aos-once='true'>
                    <span class='devision-header-header'>Our Values</span>
                    <p>Generosity that arises from Compassion for disadvantaged children, guided by Integrity and
                        Fairness while exercising Patience and Fortitude.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


@section('ourprogamstatdata')
<section class="our-program-statistics-data-outer-general-container">
    <div class="our-program-statisctics-data-inner-container">

        <div class="our-program-data-stats-header-selector">
            <span>Our Stats</span>
            <span class="program-data-stats-header-bold">Our Life Changing Programs Are Reaching Out To Hundreds of
                Thousands</span>
        </div>

        <div class="Dprogram-data" style='overflow:hidden'>

            <aside data-aos='fade-right' data-aos-duration='600' data-aos-once='true'>
                <i class="fas fa-user"></i>
                <span class="number-bold">350k+</span>
                <span>Lives Impacted</span>
            </aside>

            <aside data-aos='fade-in' data-aos-duration='600' data-aos-delay='500' data-aos-once='true'>
                <i class="fas fa-money-check-alt"></i>
                <span class="number-bold">450k+</span>
                <span>Funds</span>
            </aside>

            <aside data-aos='fade-up' data-aos-duration='600' data-aos-delay='400' data-aos-once='true'>
                <i class="fas fa-calendar-day"></i>
                <span class="number-bold">3,343+</span>
                <span>Days</span>
            </aside>

            <aside data-aos='fade-right' data-aos-duration='600' data-aos-delay='300' data-aos-once='true'>
                <i class="fas fa-clock"></i>
                <span class="number-bold">34,400+</span>
                <span>Hours Utilized</span>
            </aside>

        </div>
    </div>
</section>
@endsection



@section('nyaathaimage')
<section class="nyaatha-image-pouter-general-container">
    <div class="nyaatha-image-inner-container-selector">
        <div class="nyaatha-image-gallery-header">
            <span>Gallery</span>
            <span class="program-data-stats-header-bold">Nyaatha Education Endowment Fund Media</span>

            <div class="nyaatha-gallery-filter">
                <button class="showall-filter">Show All</button>
                <button class="training-filter">Training</button>
                <button class="Workshops-filter">Workshops</button>
            </div>
        </div>

        <div class="DGallery">

            <div class="Dgallery-inner-container" style='overflow: hidden'>

                <aside data-aos='fade-up' class='workshops' data-aos-duration='600' data-aos-duration='true'
                    data-aos-once='true'>
                    <img src="{{URL::to('Images/WhatsApp Image 2020-05-18 at 8.26.19 PM.jpeg')}}">
                </aside>

                <aside data-aos='fade-in' class='workshops' data-aos-duration='600' data-aos-once='true'>
                    <img src="{{URL::to('Images/WhatsApp Image 2020-05-18 at 8.26.16 PM.jpeg')}}">
                </aside>

                <aside data-aos='fade-right' class='workshops' data-aos-duration='600' data-aos-once='true'>
                    <img src="{{URL::to('Images/WhatsApp Image 2020-05-18 at 8.26.20 PM.jpeg')}}">
                </aside>

                <aside data-aos='fade-up' class='showall' data-aos-duration='600' data-aos-once='true'>
                    <img src="{{URL::to('Images/WhatsApp Image 2020-05-18 at 8.26.22 PM.jpeg')}}">
                </aside>

                <aside data-aos='fade-in' class='training' data-aos-duration='600' data-aos-once='true'>
                    <img src="{{URL::to('Images/WhatsApp Image 2020-05-18 at 8.26.28 PM.jpeg')}}">
                </aside>

                <aside data-aos='fade-in' class='training' data-aos-duration='600' data-aos-once='true'>
                    <img src="{{URL::to('Images/WhatsApp Image 2020-05-18 at 8.26.29 PM.jpeg')}}">
                </aside>

                <aside data-aos='fade-right' class='showall' data-aos-duration='600' data-aos-once='true'>
                    <img src="{{URL::to('Images/WhatsApp Image 2020-05-18 at 8.26.32 PM (1).jpeg')}}">
                </aside>

                <aside data-aos='fade-right' class='training' data-aos-duration='600' data-aos-once='true'>
                    <img src="{{URL::to('Images/WhatsApp Image 2020-05-18 at 8.26.32 PM.jpeg')}}">
                </aside>

                <aside data-aos='fade-right' class='showall' data-aos-duration='600' data-aos-once='true'>
                    <img src="{{URL::to('Images/WhatsApp Image 2020-05-18 at 8.27.54 PM.jpeg')}}">
                </aside>
            </div>
        </div>
    </div>
</section>
@endsection


@section('ourleadership')
<section class='our-leadership-outer-general-container'>

    <div class='our-leadership-header-selector'>
        <span class='program-data-stats-header-bold'>
            Our Leadership
        </span>
    </div>

    <div class='our-leadership-general-inner-container'>

        <div class='Dleadership' style='overflow: hidden'>

            <aside class='team-image first-leadership-aside' data-aos='fade-in' data-aos-duration='600'
                data-aos-once='true'>
                <div class='our-leadership-images'>
                    <img src="{{URL::to('Images/Philip.jpg')}}">
                </div>

                <div class='Dleadership-names'>
                    <span>Phillip Simiyu Wandibba</span><br>
                    <span>Chairman ASE</span>
                </div>
            </aside>

            <aside class='team-image second-leadership-aside' data-aos='fade-right' data-aos-duration='600'
                data-aos-delay='400' data-aos-once='true'>
                <div class='our-leadership-images'>
                    <img src="{{URL::to('Images/Gregoire Piller.jpg')}}" alt='Gregoire Piller'>
                </div>

                <div class='Dleadership-names'>
                    <span>Gregoire Piller</span><br>
                    <span>Vice chairperson</span>
                </div>
            </aside>

            <aside class='team-image third-leadership-aside' data-aos='fade-right' data-aos-duration='600'
                data-aos-delay='300' data-aos-once='true'>
                <div class='our-leadership-images'>
                    <img src="{{URL::to('Images/Millycent Aoko.jpg')}}" alt='Millycent Aoko'>
                </div>

                <div class='Dleadership-names '>
                    <span>Millycent Devinah Aoko</span><br>
                    <span>Secretary</span>
                </div>
            </aside>

        </div>

    </div>

</section>
@endsection


@section('our-leadership-modal-pop-up')
<section class='Leadership-outer-general-modal-popup'>
    <div class='Leadership-inner-general-modal-popup'>

        <div class='close-leadership-modal-pop-up'>
            <i class='fas fa-window-close'></i>
        </div>

        <div class='Leadership-inner-modal-popup'>
            <div class='our-leadership-modal-bio-heading'>
                <span class='modal-title'></span>
            </div>

            <div class='our-leadership-modal-bio-details'>

            </div>
        </div>
    </div>
</section>
@endsection


@section('ourpartners')
<section class="Our-partners-outer-general-container">

    <div class='Our-partners-header-text-selector header-header'>
        <span class='program-data-stats-header-bold'>OUR PARTNERS</span>
    </div>

    <div class="Our-partners-inner-general-container" style='overflow:hidden'>
        <div class='Dpartners'>
            <div data-aos='fade-right' data-aos-duration='600' data-aos-once='true'><span>Pulse Healthcare</span></div>
            <div data-aos='fade-right' data-aos-duration='600' data-aos-delay='500' data-aos-once='true'><span>Diomira
                    Foundation</span></div>
            <div data-aos='fade-in' data-aos-duration='600' data-aos-delay='400' data-aos-once='true'><span>Lorcan
                    Investments</span></div>
            <div data-aos='fade-right' data-aos-duration='600' data-aos-delay='300' data-aos-once='true'><span>Aises
                    Academy</span></div>
        </div>
    </div>
</section>
@endsection


@section('contactus layer')
<section class="contact-us-outer-general-container">

    <div class='contact-us-header-text-selector header-header'>
        <span>Make No Delay In Connecting With Us</span>
        <span class='contact-us-text-color'>Contact us</span>
    </div>

    <div class="contact-us-general-inner-container-selector">
        <div class='left-contact-us'>
            <aside>
                <label class="fas fa-id-card-alt"><span class='left-container-title'>Call Us</span></label>
                <span>Telephone: +254722241382</span>
            </aside><br><br>

            <aside>
                <label class="fas fa-envelope"><span class='left-container-title'>Email Us</span></label>
                <span>info@nyaathafunds.org</span>
            </aside><br><br>

            <aside>
                <label class="fas fa-id-card-alt"><span class='left-container-title'>Address</span></label>
                <span>P.O. Box 26059 - 00504, Nairobi Kenya.</span>
            </aside><br><br>
        </div>

        <div class='right-contact-us'>
            <form action='' method='post'>
                <input type='text' required placeholder='Name' name='name' class='align-together'>
                <input type='email' required placeholder='Email' name='mail' class='align-together'><br><br>
                <input type='text' required placeholder='Subject' name='subject' class='subject'><br><br>
                <textarea name='message'>Message</textarea><br><br>
                {{csrf_field()}}
                <input type='submit' name='submit' value='Send Message'>
            </form>
        </div>

    </div>
</section>
@endsection