@extends('layouts.frontapp')

@section('content')

    <section class="inner_banner">
        <div class="arContactDecorat">
            <img src="<?php echo URL::to('/'); ?>/front_assets/images/contact-decoration.png" class="img-fluid">
        </div>
        <div class="arBannerContact">
            <img src="<?php echo URL::to('/'); ?>/front_assets/images/pricing-banner.png" class="img-fluid">
        </div>


        <div class="contactBanner">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-md-auto contactBnHeading">
                        <h2>our<span>Plan</span></h2>
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

    <section class="pricing_section">
        <div class="container">
            <div class="price_container">
                <div class="price_img">
                    <img src="<?php echo URL::to('/'); ?>/front_assets/images/price-img.png" alt="">
                </div>
                <p>We offer a simple one off plan for </p>
                <h2 class="price">£4.99 <span>each month</span></h2>
                <p>Your plan will contain all the supply chain tools that we offer, no additional features required.</p>
                <hr>
                <div class="plan_include">
                    <h4>Our Plan Includes</h4>
                    <ul>
                        <li><b>Dashboards – </b>See all your supplier spend & delivery performance.</li>
                        <li><b>Purchase Orders - </b>Create your own company purchase order. </li>
                        <li><b>Reporting – </b>Review the performance of your supply chain. </li>
                        <li><b>Supplier management - </b>Manage your own supply chain where you can store all your supplier contacts into your account.</li>

                    </ul>
                    <a href="#" class="btn red_btn getstarted_btn"><span>Get Started</span></a>
                </div>
            </div>
        </div>
    </section>
    <section class="faq_accrodian">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="faq_acc_header">
                        <h2>Frequently Asked Questions</h2>
                    </div>
                    <div class="faq_accrodian_area">
                        <div class="accordion" id="faq">
                            <div class="card">
                                <div class="card-header" id="faqhead1">
                                    <a href="#" class="btn-header-link" data-toggle="collapse" data-target="#faq1" aria-expanded="true" aria-controls="faq1">Do you have a free trial? </a>
                                </div>

                                <div id="faq1" class="collapse show" aria-labelledby="faqhead1" data-parent="#faq">
                                    <div class="card-body">
                                        <p>Yes we do, please <a href="#">click here.</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqhead2">
                                    <a href="#" class="btn-header-link collapsed" data-toggle="collapse" data-target="#faq2" aria-expanded="true" aria-controls="faq2">Is there any tutorials?
                                    </a>
                                </div>

                                <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                                    <div class="card-body">
                                        <p>Yes we do, please <a href="#">click here.</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqhead3">
                                    <a href="#" class="btn-header-link collapsed" data-toggle="collapse" data-target="#faq3" aria-expanded="true" aria-controls="faq3">What plans do you offer? </a>
                                </div>

                                <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                                    <div class="card-body">
                                        <p>Yes we do, please <a href="#">click here.</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqhead4">
                                    <a href="#" class="btn-header-link collapsed" data-toggle="collapse" data-target="#faq4" aria-expanded="true" aria-controls="faq3">How do I sign up?</a>
                                </div>

                                <div id="faq4" class="collapse" aria-labelledby="faqhead4" data-parent="#faq">
                                    <div class="card-body">
                                        <p>Yes we do, please
                                            <a href="#">click here.</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqhead5">
                                    <a href="#" class="btn-header-link collapsed" data-toggle="collapse" data-target="#faq5" aria-expanded="true" aria-controls="faq3">What do If I need help?

                                    </a>
                                </div>

                                <div id="faq5" class="collapse" aria-labelledby="faqhead5" data-parent="#faq">
                                    <div class="card-body">
                                        <p>Yes we do, please
                                            <a href="#">click here.</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqhead6">
                                    <a href="#" class="btn-header-link collapsed" data-toggle="collapse" data-target="#faq6" aria-expanded="true" aria-controls="faq3">Is my data safe and secure?

                                    </a>
                                </div>

                                <div id="faq6" class="collapse" aria-labelledby="faqhead6" data-parent="#faq">
                                    <div class="card-body">
                                        <p>Yes we do, please
                                            <a href="#">click here.</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection