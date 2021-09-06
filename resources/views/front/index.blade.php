@extends('layouts.frontapp')

@section('content')


    <section class="home-banner">
        <div class="arContactDecorat">
            <img src="<?php echo URL::to('/'); ?>/front_assets/images/contact-decoration.png" class="img-fluid">
        </div>
        <!-- <div class="arBannerContact">
      <img src="images/banner-contat.png">
    </div> -->
        <div class="homeBanner">

            <div class="arStrippedWrp">
                <img src="<?php echo URL::to('/'); ?>/front_assets/images/stripped.png" alt="" class="img-fluid">
            </div>
            <div class="container">
                <div class="row justify-content-end align-items-center">
                    <div class="col-md-6">
                        <div class="arStairs">
                            <img src="<?php echo URL::to('/'); ?>/front_assets/images/stair.png" alt="">
                        </div>
                        <div class="banerTree">
                            <img src="<?php echo URL::to('/'); ?>/front_assets/images/tree.png" alt="">
                        </div>
                        <div class="bannSettings">
                            <img src="<?php echo URL::to('/'); ?>/front_assets/images/settings.png" alt="">
                        </div>
                        <div class="homeBnnerlaptops">
                            <img src="<?php echo URL::to('/'); ?>/front_assets/images/screen_wrp.png" alt="">
                            <div class="laptopScreenimg">
                                <img src="<?php echo URL::to('/'); ?>/front_assets/images/home-banner-img.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 homeBannerSect">
                        <h1>Purchase <strong>Box</strong></h1>
                        <h5>Your very own supply chain platform without the need for extra features and requirements.</h5>
                        <p>We provide a simple platform that lets you create your own purchase orders and manage your own supply chain with live Dashboards and automated reporting. All the features you need is located within your very own Purchase Box.</p>
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

    <section class="features_section">
        <div class="container">
            <h2 class="title">Features</h2>
            <div class="row align-items-center">
                <div class="col-sm-4">
                    <div class="features_img">
                        <img src="<?php echo URL::to('/'); ?>/front_assets/images/small-logo.png" alt="">
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="features_item features_item_1 mt-top">
                                <div class="features_icon">
                                    <img id="features_icon_1" src="<?php echo URL::to('/'); ?>/front_assets/images/order-creation.png" alt="">
                                </div>
                                <div class="features_info">
                                    <h3>Purchase Order Creation</h3>
                                    <p>Manage your own database of purchase orders. Create your template where you can represent your company logo.</p>
                                </div>
                            </div>
                            <div class="features_item features_item_2">
                                <div class="features_icon">
                                    <img id="features_icon_2" src="<?php echo URL::to('/'); ?>/front_assets/images/analysis.png" alt="">
                                </div>
                                <div class="features_info">
                                    <h3>Dashboards</h3>
                                    <p>Simple Automation Purchase Box creates KPI’s for you. No need for manual creation! Keep on track with your suppliers. Delivery Performance Supplier Spend.</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6">
                            <div class="features_item features_item_3">
                                <div class="features_icon">
                                    <img id="features_icon_3" src="<?php echo URL::to('/'); ?>/front_assets/images/users.png" alt="">
                                </div>
                                <div class="features_info">
                                    <h3>Supplier Management</h3>
                                    <p>Work with your own supply base that you manage in Purchase Box. Manage supplier performance through automated features within Purchase Box.</p>
                                </div>
                            </div>

                            <div class="features_item features_item_4">
                                <div class="features_icon">
                                    <img id="features_icon_4" src="<?php echo URL::to('/'); ?>/front_assets/images/note.png" alt="">
                                </div>
                                <div class="features_info">
                                    <h3>Reporting</h3>
                                    <p>Understand the status of your purchase orders. Purchase Box provides essential reporting giving you the tools to manage your supply chain.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="decoimg"><img src="images/deco.png" alt=""></div>
    </section>

    <section class="deshboard_section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-7">
                    <div class="dashboard_img">
                        <img src="<?php echo URL::to('/'); ?>/front_assets/images/dashboard-1.png" alt="" class="img-fluid">
                        <img src="<?php echo URL::to('/'); ?>/front_assets/images/dashboard-2.png" alt="" class="img-fluid last_img">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="dashboard_info">
                        <h2 class="title">Dashboards</h2>
                        <ul>
                            <li>
                                <img src="<?php echo URL::to('/'); ?>/front_assets/images/bullet.png" alt="">
                                <p>Use of automated KPI’s help reduce user management amd fast resporting times. There is no need for manual creation.</p>
                            </li>
                            <li>
                                <img src="<?php echo URL::to('/'); ?>/front_assets/images/bullet.png" alt="">
                                <p>Keep track of your supply chain by following supplier performance and spend.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">

                <div class="col-sm-6">
                    <div class="dashboard_info">
                        <h2 class="title">Risk Management </h2>
                        <ul>
                            <li>
                                <img src="<?php echo URL::to('/'); ?>/front_assets/images/bullet.png" alt="">
                                <p>Helping you identify and mitigate risk within your supply chain.</p>
                            </li>
                            <li>
                                <img src="<?php echo URL::to('/'); ?>/front_assets/images/bullet.png" alt="">
                                <p>Utilising visible performance indicators and target alerts to help you take control.</p>
                            </li>
                            <li>
                                <img src="<?php echo URL::to('/'); ?>/front_assets/images/bullet.png" alt="">
                                <p>Purchase Box allows ypu to monitor and manage your own data base, which you can access at anytime.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="dashboard_img">
                        <img src="<?php echo URL::to('/'); ?>/front_assets/images/risk-management.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="didyou_know_section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="didyou_know_img">
                        <img src="<?php echo URL::to('/'); ?>/front_assets/images/doyou-know.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="didyou_know_info">
                        <h2 class="title">Did you know?</h2>
                        <ul>
                            <li>
                                <img src="<?php echo URL::to('/'); ?>/front_assets/images/bullet.png" alt="">
                                <p>Automated po management saves money and time for any business.</p>
                            </li>
                            <li>
                                <img src="<?php echo URL::to('/'); ?>/front_assets/images/bullet.png" alt="">
                                <p>Dublicate repeat purchase orders in a second.</p>
                            </li>
                            <li>
                                <img src="<?php echo URL::to('/'); ?>/front_assets/images/bullet.png" alt="">
                                <p>No more manual input into spreadsheets and management of KPI graphs. Purchase Box will do this for you.
                                </p>
                            </li>
                            <li>
                                <img src="<?php echo URL::to('/'); ?>/front_assets/images/bullet.png" alt="">
                                <p>Purchase Box is a simple, quick and effective procurement system.
                                </p>
                            </li>
                        </ul>
                        <a href="#" class="btn didyou_know_btn"><span>Learn more</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial_section">
        <div class="testi_shape">
            <img src="<?php echo URL::to('/'); ?>/front_assets/images/testi-img.png" alt="">
        </div>
        <div class="container">
            <div class="estimonial_slider owl-carousel">
                <div class="testimonial_item">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="testimoni_info">
                                <h4>Testimonials</h4>
                                <h3>Loved by businesses, and individuals across the globe.</h3>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="estimonial_content">
                                <div class="estimonial_logo">
                                    <img src="<?php echo URL::to('/'); ?>/front_assets/images/testi-logo.png" alt="">
                                </div>
                                <div class="testi-img">
                                    <img src="<?php echo URL::to('/'); ?>/front_assets/images/testi-user.png" alt="">
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                                    make a type specimen book.</p>
                                <h4 class="name">Mark Tony</h4>
                                <h4 class="deignation">Software Developer</h4>
                                <a href="#" class="website">www.CompanyName.com</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="testimonial_item">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="testimoni_info">
                                <h4>Testimonials</h4>
                                <h3>Loved by businesses, and individuals across the globe.</h3>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="estimonial_content">
                                <div class="estimonial_logo">
                                    <img src="<?php echo URL::to('/'); ?>/front_assets/images/testi-logo.png" alt="">
                                </div>
                                <div class="testi-img">
                                    <img src="<?php echo URL::to('/'); ?>/front_assets/images/testi-user.png" alt="">
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                                    make a type specimen book.</p>
                                <h4 class="name">Mark Tony</h4>
                                <h4 class="deignation">Software Developer</h4>
                                <a href="#" class="website">www.CompanyName.com</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection