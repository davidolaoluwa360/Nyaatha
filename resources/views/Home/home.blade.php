@extends('layouts.Homelayouts')

@section('title','Nyaatha|Home')

@section('homewhoweare')
  <section class="whowearehomegeneraloutercontainer">
    <div class="whoweareDheaderselectors">
      <span>Organization</span>
      <h1>FOUNDATION</h1>
    </div>
    <div class="whoweareinnercontinerselector">
      <div class="whoweareleftcontainer">
          <img src="{{URL::to('Images/WhatsApp Image 2020-05-18 at 8.26.15 PM.jpeg')}}">
      </div>
      <div class="whowearerightcontainer">
        <div class="whoweareheaderselector"><h3>WHO WE ARE</h3></div>
        <div>
          <p>Nyaatha which means Mother of Mercy is a name given to Blessed Sr. Irene Stefani, a member of the congregation of Consolata Sisters of the Catholic Church presented by the people of Nyeri in Kenya. Nyaatha was given because of her charitable work among the poor, the afflicted and the sick that she served with a smile in the early 1900s. She became a Ray of Hope for them.</p>

          <p>Her work inspired the congregation of the Assumption Sisters of Eldoret (A.S.E.), Kenya. Through the initiative of one of the members Sr. Angela Adhiambo A.S.E., a trust fund by the name Nyaatha Education Endowment Fund (N.E.E.F.) was founded in July 2015 to provide for the post-primary educational needs of the disadvantaged children transitioning from rehabilitation centres; those from disparate backgrounds and girls at risk.<p/>

            <p>Her work inspired the congregation of the Assumption Sisters of Eldoret (A.S.E.), Kenya. Through the initiative of one of the members Sr. Angela Adhiambo A.S.E., a trust fund by the name Nyaatha Education Endowment Fund (N.E.E.F.) was founded in July 2015 to provide for the post-primary educational needs of the disadvantaged children transitioning from rehabilitation centres; those from disparate backgrounds and girls at risk.</p>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('homeourvision&mission')
  <section class="ourmissionvissiongeneraloutercontainer">
    <div class="ourmissionvissioninnercontainer">
      <div class="ourmissionvissionleftcontainerselector">
          <img src="{{URL::to('Images/WhatsApp Image 2020-05-18 at 8.26.19 PM.jpeg')}}">
      </div>
      <div class="ourmissionvissionrightcontainerselector">
        <div class="ourmissionvissionheadertext"><h2>Our Mission & Vision Statements.
           The Fundamentals.</h2></div>
        <div>
          <div class="Dvissionvisionselector">
          <div class="Dvissionvisionleftselector">
            <h3>Our Mission</h3>
            <p>To provide for the post-primary education needs of:</p>
            <ul>
              <li>Disadvantaged children transitioning from rehabilitation centres</li>
              <li>Children from disparate backgrounds</li>
              <li>Disadvantaged girls at risk</li>
            </ul>
          </div>
          <div class="Dvissionvisionrightselector">
            <h3>Our Vision</h3>
            <p>Instilling hope in disadvantaged children in the footsteps of blessed Irene Stefani</p>
          </div>
          <div class="DOurAimleftselector">
            <h3>Our Aim</h3>
            <p>The fund aims to provide for the post primary educational needs of disadvantaged boys transitioning from the two institutions run by the ASE; Kwetu Home of Peace (KHOP) and Morning Star Childrens’ Centre, as well as disadvantaged girls at risk, brought to its attention.</p>
          </div>
          <div class="Dvaluesrightselector">
            <h3>Our Values</h3>
            <p>Generosity that arises from Compassion for disadvantaged children, guided by Integrity and Fairness while exercising Patience and Fortitude.</p>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection


@section('ourprogamstatdata')
  <section class="ourprogramstatisticsdataoutergeneralcontainer">
    <div class="ourprogramstatiscticsdatainnercontainer">
      <div class="ourprogramdatastatsheaderselector">
        <span>Our Stats</span>
        <span class="programdatastatsheaderbold">Our Life Changing Programs Are Reaching Out To Hundreds of Thousands</span>
      </div>
      <div class="Dprogramdata">
        <aside>
          <i class="fas fa-user"></i>
          <span class="numberbold">350k+</span>
          <span>Lives Impacted</span>
        </aside>
        <aside>
          <i class="fas fa-money-check-alt"></i>
          <span class="numberbold">450k+</span>
          <span>Funds</span>
        </aside>
        <aside>
          <i class="fas fa-calendar-day"></i>
          <span class="numberbold">3,343+</span>
          <span>Days</span>
        </aside>
        <aside>
          <i class="fas fa-clock"></i>
          <span class="numberbold">34,400+</span>
          <span>Hours Utilized</span>
        </aside>
      </div>
    </div>
  </section>
@endsection

@section('nyaathaimage')
  <section class="nyaathaimagepoutergeneralcontainer">
    <div class="nyaathaimageinnercontainerselector">
      <div class="nyaathaimagegalleryheader">
        <span>Gallery</span>
        <span class="programdatastatsheaderbold">Nyaatha Education Endowment Fund Media</span>

        <div class="nyaathagalleryfilter">
          <button class="showallfilter">Show All</button>
          <button class="trainingfilter">Training</button>
          <button class="Workshopsfilter">Workshops</button>
          <button class="Conferencesfilter">Conferences</button>
        </div>
      </div>
      <div class="DGallery">
      <div class="Dgalleryinnercontainer">
      <aside>
        <img src="{{URL::to('Images/WhatsApp Image 2020-05-18 at 8.26.19 PM.jpeg')}}">
      </aside>
      <aside>
        <img src="{{URL::to('Images/WhatsApp Image 2020-05-18 at 8.26.16 PM.jpeg')}}">
      </aside>
      <aside>
        <img src="{{URL::to('Images/WhatsApp Image 2020-05-18 at 8.26.20 PM.jpeg')}}">
      </aside>
      <aside>
        <img src="{{URL::to('Images/WhatsApp Image 2020-05-18 at 8.26.22 PM.jpeg')}}">
      </aside>
      <aside>
        <img src="{{URL::to('Images/WhatsApp Image 2020-05-18 at 8.26.28 PM.jpeg')}}">
      </aside>
      <aside>
        <img src="{{URL::to('Images/WhatsApp Image 2020-05-18 at 8.26.29 PM.jpeg')}}">
      </aside>
      <aside>
        <img src="{{URL::to('Images/WhatsApp Image 2020-05-18 at 8.26.32 PM (1).jpeg')}}">
      </aside>
      <aside>
        <img src="{{URL::to('Images/WhatsApp Image 2020-05-18 at 8.26.32 PM.jpeg')}}">
      </aside>
      <aside>
        <img src="{{URL::to('Images/WhatsApp Image 2020-05-18 at 8.27.54 PM.jpeg')}}">
      </aside>
    </div>
      </div>
    </div>
  </section>
@endsection

@section('ourpartners')
  <section class="Ourpartnersoutergeneralcontainer">
      <div class='Ourpartnersheadertextselector'>
        <h1>OUR PARTNERS</h1>
      </div>
    <div class="Ourpartnersinnergeneralcontainer">
    <div class='Dpartercontainer'>
        <div><span>Pulse Healthcare</span></div>
        <div><span>Diomira Foundation</span></div>
        <div><span>Lorcan Investments</span></div>
        <div><span>Aises Academy</span></div>
    </div>
    </div>
  </section>
@endsection


@section('contactus layer')
  <section class="Ourpartnersoutergeneralcontainer">
      <div class='Ourpartnersheadertextselector'>
        <h1>OUR PARTNERS</h1>
      </div>
    <div class="Ourpartnersinnergeneralcontainer">
    <div class='Dpartercontainer'>
        <div><span>Pulse Healthcare</span></div>
        <div><span>Diomira Foundation</span></div>
        <div><span>Lorcan Investments</span></div>
        <div><span>Aises Academy</span></div>
    </div>
    </div>
  </section>
@endsection
