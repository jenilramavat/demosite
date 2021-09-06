@extends('layouts.frontapp')

@section('content')

    <section class="inner_banner">
        <div class="arContactDecorat">
            <img src="<?php echo URL::to('/'); ?>/front_assets/images/contact-decoration.png" class="img-fluid">
        </div>
        <div class="arBannerContact">
            <img src="<?php echo URL::to('/'); ?>/front_assets/images/banner-contat.png" class="img-fluid">
        </div>


        <div class="contactBanner">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-md-auto contactBnHeading">
                        <h2>WE ARE HAPPY <br> To <span>Assist You!</span></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="clickToScroll">
            <div class="scroll-downs">
                <div class="mousey">
                    <div class="scroller"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="contactMailSect">
        <div class="container">
            <h2 class="title">How can we assist you?</h2>
            <div class="mailIcons">
                <img src="<?php echo URL::to('/'); ?>/front_assets/images/mail-icon.png" alt="">
            </div>
            <div class="contactMailLink">
                <a href="mailto:hello@purchasebox.co.uk">Email: hello@purchasebox.co.uk</a>
            </div>
        </div>
    </section>

    <section class="contactForm">
        <div class="container">
            <div class="contactWrp">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="form-control arInput1" placeholder="First Name">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control arInput1" placeholder="Last Name">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control arInput1" placeholder="Email address">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control arInput1" placeholder="Phone No">
                    </div>
                    <div class="col-md-12">
                        <input type="text" class="form-control arInput1" placeholder="Subject">
                    </div>
                    <div class="col-md-12">
                        <textarea type="text" class="form-control arInput1" placeholder="Message"></textarea>
                    </div>
                    <div class="col-md-12 text-center">
                        <button class="btn red_btn arSubmitCont"><span>Submit</span></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection