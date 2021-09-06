@extends('layouts.frontapp')

@section('content')

<section class="inner_banner">
    <div class="arContactDecorat">
        <img src="<?php echo URL::to('/'); ?>/front_assets/images/contact-decoration.png" class="img-fluid">
    </div>
    <div class="arBannerContact">
        <img src="<?php echo URL::to('/'); ?>/front_assets/images/about-banner.png" class="img-fluid">
    </div>


    <div class="contactBanner">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-auto contactBnHeading">
                    <h2>Know more<br><span>About</span>US</h2>
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

<section class="about_section">
    <div class="container">
        <h2 class="title">About Company</h2>
        <div class="row align-items-center">
            <div class="col-sm-7">
                <div class="about-img">
                    <img src="<?php echo URL::to('/'); ?>/front_assets/images/about-img.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-sm-5">
                <div class="about_info">
                    <h3>Company Overview</h3>
                    <p>We’re changing the way organisations make purchases!</p>
                    <h4>Who we are</h4>
                    <p>Purchase Box is a well developed online purchasing platform which helps all businesses achieve their day to day purchase requirements. Our aim is to make purchase requests simple and easy enough to process.
                    </p>
                    <h4>Our mission</h4>
                    <p>At Purchase Box we’re on a mission to create a user-friendly environment that helps businesses manage a data base which adds value to their company. We have created tools to create visibility in your own supply chain where it is
                        easy to identify spends that have gone over budget to suppliers performing poorly.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="market_section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2 class="title">Our Markets</h2>
                <ul class="market_list">
                    <li>
                        <img src="<?php echo URL::to('/'); ?>/front_assets/images/abo-icon-1.png" alt="">
                        <h4>Construction & Engineering </h4>
                    </li>
                    <li>
                        <img src="<?php echo URL::to('/'); ?>/front_assets/images/abo-icon-2.png" alt="">
                        <h4>Oil and Gas </h4>
                    </li>
                    <li>
                        <img src="<?php echo URL::to('/'); ?>/front_assets/images/abo-icon-3.png" alt="">
                        <h4>Education</h4>
                    </li>
                    <li>
                        <img src="<?php echo URL::to('/'); ?>/front_assets/images/abo-icon-4.png" alt="">
                        <h4>Marketing</h4>
                    </li>
                    <li>
                        <img src="<?php echo URL::to('/'); ?>/front_assets/images/abo-icon-5.png" alt="">
                        <h4>Hospitality</h4>
                    </li>
                    <li>
                        <img src="<?php echo URL::to('/'); ?>/front_assets/images/abo-icon-6.png" alt="">
                        <h4>Finance</h4>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6">
                <div class="market_img">
                    <img src="<?php echo URL::to('/'); ?>/front_assets/images/market-img.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection