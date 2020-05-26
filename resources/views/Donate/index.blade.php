@extends('layouts.Donatelayouts')

@section('title', 'Nyaatha|Donate')

@section('donateview')
    <section class='donateoutergeneralcontainer'>
    <div class='donatemainheaderselector'>
                <span class='donatemainheaderselectorhead1'>NYAATHA EDUCATION ENDOWMENT FUND</span>
                <span class='donatemainheaderselectorhead2'>Home/Donate</span>
            </div>
        <div class='donateinnergeneralcontainerselector'>
            <div class='donateleftcontainer'>
                <div class='donatelefttopcontainerselector'>
                    <h1>Donate</h1>
                    <p>We need your help to make a difference in the lives of disadvantaged children.
                        It is the sum of many small efforts that often results in great success.</p>
                </div>
                <div class='donateleftbottomcontainerselector'>
                    <h1>MAKE A DONATION</h1>
                    <form>
                        <label>Full Name <span>*</span></label><br>
                        <input type='text' required name='fullname'><br><br>
                        <label>Email <span>*</span></label><br>
                        <input type='email' required name='mail'><br><br>
                        <label>Amount(USD)<span>*</span></label><br>
                        <input type='text' name='amount' required><br><br>
                        <label>Phone Number<span>*</span></label><br>
                        <input type='tel' required name='telephone'><br><br>
                        <label><span>*</span> are compulsory</label><br>
                        <img src='https://www.obuduconservationc.org/wp-content/plugins/payment-forms-for-paystack/images/logos@2x.png' alt='paypallogo'><br><br>
                        <input type='submit' name='submit' value='Donate'>
                    </form>
                </div>
            </div>
            <div class='donaterightcontainer'>
                <div class='donaterighttopcontainerselector'>
                    <h1>Spread The Word</h1>
                    <p>Tell your friends and family about these less privileged children.
                        There’s no better way to make an impact than to become an active advocate yourself.
                         Join now and make an impact!</p>
                </div>
                <div class='donaterightbottomcontainerselector'>
                    <img src="{{URL::to('Images/WhatsApp Image 2020-05-18 at 8.26.16 PM.jpeg')}}">
                    <h1>HELP US REACH OUT TO SPONSORS</h1>
                    <p>We seek to build an educational foundation for disadvantaged children by mobilizing resources through
                    sincere partnerships with well-wishers and growing the funds by meaningful and appropriate investments, to
                    achieve a growth level that can sustainably finance the educational needs of deserving beneficiaries.</p>
            </div>

            <div class='followus'>
                <h1>FOLLOW US</h1>
                <div class='followusfontawesome'>
                <a><i class="fab fa-facebook-f"></i></a>
                <a><i class="fab fa-instagram"></i></a>
                <a><i class="fas fa-envelope-square"></i></a>
                <a><i class="fab fa-linkedin-in"></i></a>
                <a><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            </div>
        </div>
    </section>
@endsection
