<?php
$css = [
        "front_assets/css/bootstrap.min.css",
        "front_assets/css/style.css",
        "front_assets/fonts/stylesheet.css",
        "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css",
        "front_assets/css/owl.theme.default.css",
        "front_assets/css/owl.carousel.min.css",
        "front_assets/css/animate.min.css",


];

$js = [
        "front_assets/js/respond.min.js",
        "front_assets/js/jquery-3.6.0.min.js",
        "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js",
        "front_assets/js/bootstrap.min.js",
        "front_assets/js/owl.carousel.min.js",
        "front_assets/js/jquery.scrolla.min.js",



];

?>

 <!doctype html>


<html>

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <META name="robots" content="index,follow">
    <META name="author" content="">
    <META name="copyright" content="Copyright 2018">
    <META name="description" content="">
    <META name="keywords" content="">
    <meta name="revisit-after" content="7 days" />
    <title>::Dv-PurchaseBox::</title>
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1" user-scalable="no">

    @foreach ($css as $addcss)
        @if( strstr($addcss,"http"))
            <link rel="stylesheet" type="text/css" href="{{$addcss}}" />
        @else
            <link rel="stylesheet" type="text/css" href="<?php echo URL::to('/'); ?>/{{$addcss}}" />
        @endif
    @endforeach


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


    <script src="<?php echo URL::to('/'); ?>/front_assets/js/respond.min.js"></script>
</head>

<body>

<header class="siteHeader">
    <section class="class">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-auto">
                    <a href="index.html" class="logo">
                        <img src="<?php echo URL::to('/'); ?>/front_assets/images/logo.png" class="">
                    </a>
                </div>
                <div class="col-lg">
                    <nav class="arHeaderWrp">
                        <button class="arHamberger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <ul>
                            <li class="active"><a href="<?php echo URL::to('/'); ?>">Home</a></li>
                            <li><a href="<?php echo URL::to('/about'); ?>">About</a></li>
                            <li><a href="<?php echo URL::to('/price'); ?>">Pricing</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="<?php echo URL::to('/video'); ?>">Video</a></li>
                            <li><a href="<?php echo URL::to('/contact'); ?>">Contact</a></li>
                            <li><a class="btn red_btn arOrangeBtn" href="<?php echo URL::to('/admin/login'); ?>"><span>Login</span></a></li>
                            <li><a class="btn red_btn arOrangeBtn" href="<?php echo URL::to('/admin/register'); ?>"><span>Free Trial</span></a></li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</header>

@yield('content')



<section class="footer_top_sect">
    <div class="container">
        <div class="topFooterWrp">
            <div class="row align-items-center">
                <div class="col-md">
                    <h2><strong>Still Unsure?</strong> Start Your 14-Day Free <br> Trial Today</h2>
                </div>
                <div class="col-md-auto">
                    <a href="#" class="btn red_btn getStartedBtn"><span>Get Started</span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="site-footer">
    <div class="footer_decoration">
        <img src="<?php URL::to('/'); ?>/front_assets/images/footer-bg.svg" alt="">
    </div>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-4">
                <a href="#" class="footer_logo">
                    <img src="<?php URL::to('/'); ?>/front_assets/images/logo.png" alt="">
                </a>
                <div class="footerParagraph">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                        specimen book. </p>
                </div>
                <div class="footerSocialMedia">
                    <ul class="d-flex">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <h4 class="arFtHeading">Features</h4>
                <ul class="ftList">
                    <li><a href="#">Purchase Requisition</a></li>
                    <li><a href="#">Purchase Order</a></li>
                    <li><a href="#">Invoice Automation</a></li>

                    <li><a href="#">Vendor Management</a></li>
                    <li><a href="#">Spend Analytics</a></li>
                    <li><a href="#">Integrations</a></li>

                </ul>
            </div>
            <div class="col-md-2">
                <h4 class="arFtHeading">Join Us</h4>
                <ul class="ftList">
                    <li><a href="#">Sign In</a></li>
                    <li><a href="#">Sign Up</a></li>
                </ul>
            </div>


        </div>

        <div class="ftMiddleRow">
            <div class="row">
                <div class="col-md">
                    <p><a href="#">Terms</a> | <a href="#">Privacy</a> | <a href="#">GDPR</a> | <a href="#">Compliance</a> </p>
                </div>
                <div class="col-md-auto">
                    <p>Copyright © 2021 <strong>PurchaseBox.</strong> All Rights Reserved</p>
                </div>
            </div>

        </div>


    </div>

    <div class="footerDecoration">
        <img src="<?php URL::to('/'); ?>/front_assets/images/footer-dco.png" alt="">
    </div>

</footer>

@foreach ($js as $addjs)
    @if( strstr($addjs,"http") )

        <script type="text/javascript" src="{{$addjs}}" ></script>
    @else
        <script type="text/javascript" src="<?php echo URL::to('/'); ?>/{{$addjs}}" ></script>
@endif
@endforeach



<script>
    var menu_btn = document.querySelector('.arHamberger');
    var arHeaderWrp = document.querySelector('.arHeaderWrp');

    menu_btn.addEventListener('click', () => {
        menu_btn.classList.toggle('clicked');
    arHeaderWrp.classList.toggle('active_menu');

    })
</script>
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        nav: true,
        navText: ["<img src='images/arrow-left.png'>", "<img src='images/arrow-right.png'>"],
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 3,
                nav: false
            },
            1000: {
                items: 1,
                nav: true,
                loop: false
            }
        }
    })

    $('.animate').scrolla({
        mobile: false, // disable animation on mobiles
        once: true, // only once animation play on scroll
        animateCssVersion: 4 // used animate.css version (3 or 4)
    });



    let fixheader = document.querySelector(".siteHeader");
    let sticky = fixheader.offsetTop;


    window.addEventListener("scroll", () => {
        if (window.pageYOffset > sticky) {
        fixheader.classList.add("sticky_header");
    } else {
        fixheader.classList.remove("sticky_header");
    }

    });
</script>

</body>