@extends('layouts.frontapp')

@section('content')

    <section class="inner_banner">
        <div class="arContactDecorat">
            <img src="<?php echo URL::to('/'); ?>/front_assets/images/contact-decoration.png" class="img-fluid">
        </div>
        <div class="arBannerContact">
            <img src="<?php echo URL::to('/'); ?>/front_assets/images/video-banner.png" class="img-fluid">
        </div>


        <div class="contactBanner">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-md-auto contactBnHeading">
                        <h2>Video<br><span>Tutorials</span></h2>
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

    <section class="video_section">
        <div class="video_leaf_shape">
            <img src="<?php echo URL::to('/'); ?>/front_assets/images/video-shape.png" alt="">
        </div>
        <div class="container">
            <h2 class="title">Video Training</h2>
            <p class="sub_title">Get quick access to Purchase Box tutorials</p>
            <div class="row">
                <div class="col-sm-8">
                    <div class="video_container">
                        <video poster="<?php echo URL::to('/'); ?>/front_assets/images/video-thumb.jpg">
                            <source src="video.mp4" type="video/mp4">
                            <source src="video.ogg" type="video/ogg">
                        </video>
                        <div class="playbtn"><i class="fas fa-play"></i></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="playlist">
                        <ul>
                            <li>
                                <div class="playlist_video">
                                    <img src="<?php echo URL::to('/'); ?>/front_assets/images/playlist-thumb.png" alt="" class="img-fluid">
                                </div>
                                <div class="video_info">
                                    <h4>How to raise a purchase order</h4>
                                    <p>Anthony Rother | 03 Oct,2016</p>
                                </div>
                            </li>
                            <li>
                                <div class="playlist_video">
                                    <img src="<?php echo URL::to('/'); ?>/front_assets/images/playlist-thumb.png" alt="" class="img-fluid">
                                </div>
                                <div class="video_info">
                                    <h4>How to raise a purchase order</h4>
                                    <p>Anthony Rother | 03 Oct,2016</p>
                                </div>
                            </li>
                            <li>
                                <div class="playlist_video">
                                    <img src="<?php echo URL::to('/'); ?>/front_assets/images/playlist-thumb.png" alt="" class="img-fluid">
                                </div>
                                <div class="video_info">
                                    <h4>How to raise a purchase order</h4>
                                    <p>Anthony Rother | 03 Oct,2016</p>
                                </div>
                            </li>
                            <li>
                                <div class="playlist_video">
                                    <img src="<?php echo URL::to('/'); ?>/front_assets/images/playlist-thumb.png" alt="" class="img-fluid">
                                </div>
                                <div class="video_info">
                                    <h4>How to raise a purchase order</h4>
                                    <p>Anthony Rother | 03 Oct,2016</p>
                                </div>
                            </li>
                            <li>
                                <div class="playlist_video">
                                    <img src="<?php echo URL::to('/'); ?>/front_assets/images/playlist-thumb.png" alt="" class="img-fluid">
                                </div>
                                <div class="video_info">
                                    <h4>How to raise a purchase order</h4>
                                    <p>Anthony Rother | 03 Oct,2016</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection