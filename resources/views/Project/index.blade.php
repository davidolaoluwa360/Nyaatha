@extends('layouts.Projectlayouts')

@section('title', 'Nyaatha|Project')

@section('ourproject')
    <section class='ourprojectoutergeneralcontainer'>
        <div class='ourprojectmainheaderselector'>
            <span class='projectbolderfontlarge'>NYAATHA EDUCATION ENDOWMENT FUND</span>
            <span class='projectnormalfontmedium'>Home / Projects</span>
        </div>

        <div class='ourprojectinnergeneralcontainer'>
            <div class='farmingimage'>
                <img src="{{URL::to('Images/WhatsApp Image 2020-05-18 at 8.26.29 PM.jpeg')}}" alt='Nyaathafarming'>
            </div>
            <div class='farmingdescription'>
                <h1>Farm projects</h1>
                <p>Farming is the only project that is currently being pursued, and there is
                    some progress going on. This has been made possible by the Assumption Sisters
                    of Eldoret who have agreed to give part of their farm to Nyaatha Education Endowment
                    Fund (N.E.E.F.) to use it for raising funds for supporting the children being sponsored.
                     The farm is located in Kerio Valley in the Great Rift Valley. Some farming activities
                     are already in place, and an orchard is being developed as can be seen in the
                      photographs of some of the items that are being grown, such as watermelons,
                      butternuts and pawpaws. Challenges of marketing are being explored to enable
                       maximum benefits from the produce.</p>
                <p>The farm intended to be a boot camp during the holidays. This will enable children
                    to learn to farm and appreciate where some of the funds of their education come.
                    Since one of the Economic Pillars of the Kenya government is agriculture, the exposure
                    of the children may make some of them also to develop an interest in farming. It is,
                    therefore, one of the ways of empowering them.</p>
                <p>A management structure for taking care of the farm activities is being employed.
                     Expertise is also being the making sure that maximum returns are realized from the farm,
                     and this will also inform the number of staff needed. The photographs are showing what
                     can be referred to as the first fruits.</p>
            </div>
        </div>
    </section>
@endsection
