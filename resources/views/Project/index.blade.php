@extends('layouts.Projectlayouts')

@section('title', 'Nyaatha|Project')

@section('ourproject')
<section class='ourprojectoutergeneralcontainer'>
    <div class='ourprojectmainheaderselector'>
        <span class='projectbolderfontlarge'>NYAATHA EDUCATION ENDOWMENT FUND</span>
        <span class='projectnormalfontmedium'>Home / Projects</span>
    </div>

    <div class='ourprojectinnergeneralcontainer'>
        <div class='farmingimage farming-image-container-select' data-aos='fade-up' data-aos-duration='700'
            data-aos-delay='700' data-aos-once='true'>
            <aside data-aos='fade-down' data-aos-duration='600' data-aos-once='true'>
                <img src="{{URL::to('Images/WhatsApp Image 2020-05-18 at 8.26.29 PM.jpeg')}}" alt='Nyaathafarming'>
            </aside>

            <aside data-aos='fade-right' data-aos-duration='600' data-aos-delay='500' data-aos-once='true'>
                <img src="{{URL::to('Images/WhatsApp Image 2020-05-18 at 8.26.22 PM.jpeg')}}">
            </aside>

            <aside data-aos='fade-right' data-aos-duration='600' data-aos-delay='400' data-aos-once='true'>
                <img src="{{URL::to('Images/poultry.png')}}" alt='Nyaatha-poultry'>
            </aside>
        </div>

        <div class='farmingdescription' data-aos='fade-right' data-aos-duration='700' data-aos-delay='800'
            data-aos-once='true'>
            <h1>Farming project</h1>
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

        <div class='farmingimage poultry-image-select' data-aos='fade-right' data-aos-duration='600'
            data-aos-dalay='600' data-aos-once='true'>
            <aside>
                <img src="{{URL::to('Images/WhatsApp Image 2020-06-10 at 9.25.40 AM.jpeg')}}" alt='Nyaatha-Poultry'>
            </aside>

            <aside data-aos='fade-right' data-aos-duration='600' data-aos-delay='600' data-aos-once='true'>
                <img src="{{URL::to('Images/WhatsApp Image 2020-05-18 at 8.26.32 PM (1).jpeg')}}">
            </aside>
        </div>

        <div class='farmingdescription' data-aos='fade-right' data-aos-duration='700' data-aos-once='true'>
            <h1>Poultry project</h1>
            <h3>Introduction</h3>
            <p>Nyaatha Education Endowment Fund (NEEF) was founded in July 2015 to provide for the post primary
                educational needs of the disadvantaged children transitioning from rehabilitation centres; those
                from desperate backgrounds and girls at risk.</p>
            <p>The end result of the Fund is to empower the disadvantaged children and give them a Ray of Hope
                through the education so as to be able to stand on their own and also become a ray of hope for
                others.Those who are sponsored are in secondary schools and others are in colleges.</p>
            <p>The Fund has mostly obtained the finances from the well-wishers. Through the farm made possible by
                the Assumption Sisters of Eldoret who agreed to give part of their farm to NEEF to use for raising
                funds,
                farming activities such as having an orchard, growing water melons, butter nuts and paw paws and
                cereals has been going on. Marketing and weather unpredictability are some of the challenges that
                affect maximum benefits. Keeping of livestock and poultry is another area being explored but the
                starting capital is a challenge.</p>
            <h3>The Poultry project</h3>
            <p>The Nyaatha Chicken Project has been started as this has been seen to have a reasonable starting capital
                and high returns. The requirements are given in the table of the budget shown here below.</p>

            <table class='project-budget-table'>
                <caption style='font-weight: bolder'>Budget</caption>
                <thead>
                    <tr>
                        <th>NO.</th>
                        <th>REQUIREMENTS</th>
                        <th>QUANTITY</th>
                        <th>COST PER EACH(KSH.)</th>
                        <th>TOTAL COST(KSH.)</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Chicken House</td>
                        <td>1 No.</td>
                        <td>300,000.00</td>
                        <td>300,000.00</td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Chicks</td>
                        <td>500 No.</td>
                        <td>100.00</td>
                        <td>50,000.00</td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Feeding Troughs</td>
                        <td>25 No.</td>
                        <td>800.00</td>
                        <td>20,000.00</td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Water Troughs</td>
                        <td>25 No.</td>
                        <td>800.00</td>
                        <td>20,000.00</td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>Chicken Mash</td>
                        <td>20 Sacks</td>
                        <td>3,000.00</td>
                        <td>60,000.00</td>
                    </tr>
                    <tr>
                        <td>6.</td>
                        <td>Grower Mash</td>
                        <td>40 Sacks</td>
                        <td>2,400.00</td>
                        <td>96,000.00</td>
                    </tr>
                    <tr>
                        <td>7.</td>
                        <td>Layer Mash</td>
                        <td>80 Sacks</td>
                        <td>2,400.00</td>
                        <td>192.000.00</td>
                    </tr>
                    <tr>
                        <td>8.</td>
                        <td>Treatment Vaccines</td>
                        <td></td>
                        <td>15,000.00</td>
                        <td>15,000.00</td>
                    </tr>
                    <tr>
                        <td>9.</td>
                        <td>Care Giver</td>
                        <td>12 Months</td>
                        <td>5,000.00</td>
                        <td>60,000.00</td>
                    </tr>
                    <tr>
                        <td>10.</td>
                        <td>Workers Shelter 3 Rooms and Ablution</td>
                        <td></td>
                        <td>616,000.00</td>
                        <td>616,000.00</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td></td>
                        <td style='font-weight: bolder'>GRAND TOTAL</td>
                        <td></td>
                        <td></td>
                        <td style='font-weight: bolder'>1,429,000.00</td>
                    </tr>
                </tfoot>
            </table>
            <div class='download-budject-container'>
                <a href="{{URL::to('Documents/CHICKEN PROJECT BUDJECT. MKWENDA.docx')}}" class='download-budget'
                    download='Nyaatha-project-budject'>Download Budget</a>
                <a href="{{URL::to('https://docs.google.com/document/d/15bHVBZZzfZrpOXGaqQSJnVG_WNca3Aod477IJy-qHDI/edit?usp=sharing')}}"
                    class='view-budget' target='_blank' rel='noreferrer noopener'>View Budget</a>
            </div>
            <h3>Financing the Project</h3>
            <p>The Fund currently does not have the money but is looking for well-wishers or a soft
                loan to fund the project.</p>
            <div class='project-Donation-general-container'>
                <div class='project-Donate' data-aos='fade-right' data-duration='800' data-aos-delay='700'
                    data-aos-once='true'>
                    <div class='project-donate-fonts'>
                        <i class="fas fa-money-check-alt" title='Donate'></i>
                    </div>
                    <span class='project-pop-up'>Donate</span>
                </div>

                <div class='project-loan' data-aos='fade-right' data-duration='800' data-aos-delay='600'
                    data-aos-once='true'>
                    <div class='project-donate-fonts'>
                        <i class="fas fa-money-bill-alt"></i>
                    </div>
                    <span class='project-pop-up' title='Soft-Loan'>Soft-Loan</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('project-modal-pop-up')
<section class='project-donate-general-container-selector'>
    <div class='project-donate-inner-container-selector'>
        <div class='close-project-window-tap'>
            <i class='fas fa-window-close'></i>
        </div>

        <div class='project-donate-post-modal-popup'>
            <h2>How You Can Help</h2>
            <ul>
                <li><span class='list-group-item'>Bank Deposit/Transfer: </span>ABC Bank Account Number: 002234001000037
                </li>
                <li><span class='list-group-item'>Account Name:</span> ASE NYAATHA ENDOWMENT EDUCATION FUND</li>
                <li><span class='list-group-item'>Paybill Number:</span> 7013043</li>
            </ul>
            <span>For more information on how you can use the above modes of donation, kindly send an inquiry
                to:</span><br>
            <a style="color:  blue" href='mailto:donations@nyaathafunds.org'>donations@nyaathafunds.org</a>
        </div>
    </div>
</section>
@endsection