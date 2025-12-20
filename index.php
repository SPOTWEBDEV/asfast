<?php
include_once "server/config/database.php";




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $sitename ?></title>
    <link rel="icon" href="<?php echo $domain ?>assets/images/logo.png" type="image/png">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Seoly — SEO & Digital Marketing Website Template" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    <link href="<?php echo $domain ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="<?php echo $domain ?>assets/css/vendors.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $domain ?>assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $domain ?>assets/css/coloring.css" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="<?php echo $domain ?>assets/css/colors/scheme-01.css" rel="stylesheet" type="text/css">

</head>

<body>
    <div id="wrapper">
        <a href="#" id="back-to-top"></a>

        <!-- page preloader begin -->
        <div id="de-loader"></div>
        <!-- page preloader close -->

        <!-- header begin -->
        <header class="transparent header-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-inner">
                            <div class="de-flex sm-pt10">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="index.html">
                                            <img class="logo-main" src="<?php echo $domain ?>assets/images/logo.png" alt="">
                                            <img class="logo-scroll" src="<?php echo $domain ?>assets/images/logo.png" alt="">
                                            <img class="logo-mobile" src="<?php echo $domain ?>assets/images/logo.png" alt="">
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                                <div class="de-flex-col header-col-mid">
                                    <ul id="mainmenu">
                                        <li><a class="menu-item" href="index.html">Home</a>

                                        </li>
                                        <li><a class="menu-item" href="about.html">About Us</a></li>
                                        <li><a class="menu-item" href="services.html">Services</a>

                                        </li>


                                        <li><a class="menu-item" href="#contact">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="de-flex-col">
                                    <div class="menu_side_area">
                                        <a class="btn-main fx-slide" href="request.html"><span>Download</span></a>
                                        <span id="menu-btn"></span>
                                    </div>

                                    <div id="btn-extra" class="img">
                                        <img src="<?php echo $domain ?>assets/images/ui/dots.svg" class="" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">

            <div id="top"></div>

            <section class="relative overflow-hidden" data-bgimage="url(<?php echo $domain ?>assets/images/background/bg.webp) 100% top">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-6">
                            <h1 class="wow fadeInUp" data-wow-delay=".2s">Start trading without borders <?php echo $sitename ?>.</h1>
                            <p class="col-lg-10 wow fadeInUp" data-wow-delay=".4s">Securely manage Your Digital Assets Portfolio and unlock the value of your unused Giftcards</p>

                            <a class="btn-main mb10 mb-3 wow fadeInUp" data-wow-delay=".6s" href="request.html"><span>Get Free Proposal</span></a>

                            <div class="d-lg-flex relative">
                                <div class="d-lg-flex align-items-center lh-1-5 me-4">
                                    <h3 class="fs-48 id-color mb-0 me-2">23K+</h3>
                                    Keywords<br>Ranked
                                </div>

                                <div class="d-lg-flex align-items-center lh-1-5">
                                    <h3 class="fs-48 id-color mb-0 me-2">16+</h3>
                                    Years<br>Experience
                                </div>

                                <img src="<?php echo $domain ?>assets/images/misc/arrow-black.webp" class="absolute w-40 end-0 top-0 sm-hide anim-left-right" alt="">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="relative">
                                <div class="bg-white shadow-soft abs abs-middle end-0 p-4 py-3 mt-4 rounded-1 overflow-hidden z-2 wow fadeInLeft" data-wow-delay=".7s">
                                    <div class="d-flex justify-content-center">
                                        <div class="relative me-4">
                                            <img src="<?php echo $domain ?>assets/images/testimonial/1.webp" class="w-50px circle ms-min-10" alt="">
                                            <img src="<?php echo $domain ?>assets/images/testimonial/2.webp" class="w-50px circle ms-min-10" alt="">
                                            <img src="<?php echo $domain ?>assets/images/testimonial/3.webp" class="w-50px circle ms-min-10" alt="">
                                        </div>
                                        <div class="fw-600 fs-14 lh-1-5"><span class="fs-18 fw-bold text-dark">23k</span><br>Happy Customers</div>
                                    </div>
                                </div>
                                <img src="<?php echo $domain ?>assets/images/misc/c8.webp" class="w-100 pe-3 wow fadeInUp" data-wow-delay=".3s" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gradient-edge-bottom light"></div>
            </section>


            <section class="pt-0">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-5">
                            <div class="subtitle id-color wow fadeInUp">Our Services</div>
                            <h2 class="mb-0 wow fadeInUp">All-in-One Crypto & Digital Payments Platform</h2>
                        </div>
                        <div class="col-lg-4 offset-lg-3">
                            <div class="spacer-single"></div>
                            <p class="wow fadeInUp">
                                Asfast makes it easy to trade crypto, manage your wallet, pay bills,
                                and convert digital assets to instant cash — all in one secure app.
                            </p>
                        </div>
                    </div>

                    <div class="spacer-single"></div>

                    <div class="row g-4">

                        <!-- Savings -->
                        <div class="col-lg-4 wow fadeInRight" data-wow-delay=".2s">
                            <div class="bg-color-op-2 relative h-100 p-40 rounded-1">
                               
                                <h3>Secure Wallet & Savings</h3>
                                <p>
                                    Safely store your fiat and crypto assets in one wallet and access
                                    your funds anytime with full transparency.
                                </p>
                                <a class="btn-plus" href="service-single.html">
                                    <i class="fa fa-plus"></i>
                                    <span>Read more</span>
                                </a>
                            </div>
                        </div>

                        <!-- Crypto Wallet -->
                        <div class="col-lg-4 wow fadeInRight" data-wow-delay=".4s">
                            <div class="bg-color-op-2 relative h-100 p-40 rounded-1">
                                
                                <h3>Buy, Sell & Swap Crypto</h3>
                                <p>
                                    Instantly buy, sell, send, receive, and swap cryptocurrencies
                                    directly from your personalized Asfast wallet.
                                </p>
                                <a class="btn-plus" href="service-single.html">
                                    <i class="fa fa-plus"></i>
                                    <span>Read more</span>
                                </a>
                            </div>
                        </div>

                        <!-- Bills -->
                        <div class="col-lg-4 wow fadeInRight" data-wow-delay=".6s">
                            <div class="bg-color-op-2 relative h-100 p-40 rounded-1">
                                
                                <h3>Bills & Airtime Payments</h3>
                                <p>
                                    Buy airtime, purchase mobile data, and pay utility bills quickly
                                    at affordable rates directly from your wallet.
                                </p>
                                <a class="btn-plus" href="service-single.html">
                                    <i class="fa fa-plus"></i>
                                    <span>Read more</span>
                                </a>
                            </div>
                        </div>

                        <!-- Gift Cards -->
                        <div class="col-lg-4 wow fadeInRight" data-wow-delay=".6s">
                            <div class="bg-color-op-2 relative h-100 p-40 rounded-1">
                               
                                <h3>Redeem Gift Cards to Cash</h3>
                                <p>
                                    Convert unused gift cards from brands like iTunes, Amazon, Steam,
                                    Razer Gold, and more into instant cash.
                                </p>
                                <a class="btn-plus" href="service-single.html">
                                    <i class="fa fa-plus"></i>
                                    <span>Read more</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="p-0 relative"
                data-bgimage="url(<?php echo $domain ?>assets/images/background/bg-2.webp) 100% top">

                <div class="container relative z-2">
                    <div class="row g-4 gx-5 align-items-center">

                        <div class="col-lg-6">
                            <div class="relative">
                                <img src="<?php echo $domain ?>assets/images/misc/8.webp"
                                    class="w-100 px-3 wow fadeInUp" data-wow-delay=".3s" alt="">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="subtitle id-color wow fadeInUp">About Asfast</div>
                            <h2 class="wow fadeInUp">
                                Simplifying Crypto Trading & Digital Payments for Everyone
                            </h2>

                            <ul class="ul-check">
                                <li class="wow fadeInUp" data-wow-delay=".2s">
                                    Secure platform for buying, selling, and managing crypto assets.
                                </li>
                                <li class="wow fadeInUp" data-wow-delay=".4s">
                                    Fast conversions from crypto and gift cards to instant cash.
                                </li>
                                <li class="wow fadeInUp" data-wow-delay=".6s">
                                    Trusted payment solutions for airtime, data, and utility bills.
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="gradient-edge-top light"></div>
                <div class="gradient-edge-bottom light"></div>
            </section>


            <section>
                <div class="container">
                    <div class="row g-4 gx-5">

                        <div class="col-lg-4">
                            <div class="subtitle id-color wow fadeInUp mb-3">Why Choose Us</div>
                            <h2 class="wow fadeInUp">A Smarter Way to Manage Digital Assets</h2>
                            <div class="relative">
                                <a href="request.html" class="btn-main fx-slide btn-light-trans">
                                    <span>Get Started</span>
                                </a>
                                <img src="<?php echo $domain ?>assets/images/misc/arrow-black.webp"
                                    class="absolute w-50 end-0 top-0 sm-hide anim-left-right" alt="">
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <h4 class="mb-4 wow fadeInRight">Why choose Asfast</h4>
                            <ol class="ol-style-1">
                                <li class="wow fadeInUp" data-wow-delay=".2s">
                                    Secure platform built for crypto trading, storage, and digital payments.
                                </li>
                                <li class="wow fadeInUp" data-wow-delay=".4s">
                                    Fast transactions with real-time processing and instant confirmations.
                                </li>
                                <li class="wow fadeInUp" data-wow-delay=".6s">
                                    Trusted system with strong security and user-friendly experience.
                                </li>
                            </ol>
                        </div>

                        <div class="col-lg-4">
                            <h4 class="mb-4 wow fadeInRight">Benefits for you</h4>
                            <ol class="ol-style-1">
                                <li class="wow fadeInUp" data-wow-delay=".2s">
                                    Manage crypto, gift cards, and bills from one simple dashboard.
                                </li>
                                <li class="wow fadeInUp" data-wow-delay=".4s">
                                    Enjoy competitive rates and quick conversions to instant cash.
                                </li>
                                <li class="wow fadeInUp" data-wow-delay=".6s">
                                    Save time with a reliable app designed for everyday digital payments.
                                </li>
                            </ol>
                        </div>

                        <div class="spacer-half"></div>

                        <!-- Partners / Trust Logos (unchanged images) -->
                        <div class="col-lg-12">
                            <div class="row g-4 gx-lg-5 align-items-center">
                                <div class="col-md-3 col-6 wow scaleIn" data-wow-delay=".0s">
                                    <div class="text-center">
                                        <img src="<?php echo $domain ?>assets/images/partners/google-partner.webp" class="w-50" alt="">
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 wow scaleIn" data-wow-delay=".2s">
                                    <div class="text-center">
                                        <img src="<?php echo $domain ?>assets/images/partners/meta-business-partner.webp" class="w-50" alt="">
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 wow scaleIn" data-wow-delay=".4s">
                                    <div class="text-center">
                                        <img src="<?php echo $domain ?>assets/images/partners/hubspot-certified-partner.webp" class="w-50" alt="">
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 wow scaleIn" data-wow-delay=".6s">
                                    <div class="text-center">
                                        <img src="<?php echo $domain ?>assets/images/partners/tiktok-marketing-partners.webp" class="w-50" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="bg-color-op-2 relative overflow-hidden rounded-1 mx-4">
                <div class="container">
                    <div class="row g-4 align-items-center">

                        <div class="col-lg-8">
                            <div class="owl-carousel owl-single-dots">

                                <div class="ps-lg-5 ps-0">
                                    <i class="icofont-quote-left id-color fs-40 mb-4 wow fadeInUp"></i>
                                    <h3 class="fs-28 mb-4 wow fadeInUp">
                                        Asfast makes crypto trading and bill payments incredibly easy.
                                        I can buy crypto, pay bills, and convert gift cards without stress.
                                    </h3>
                                    <span class="wow fadeInUp">Michael O., Crypto Trader</span>
                                </div>

                                <div class="pe-lg-5 pe-0">
                                    <i class="icofont-quote-left id-color fs-40 mb-4 wow fadeInUp"></i>
                                    <h3 class="fs-28 mb-4 wow fadeInUp">
                                        Fast transactions and a clean interface. I love how everything
                                        from wallet to airtime is available in one app.
                                    </h3>
                                    <span class="wow fadeInUp">Sarah A., App User</span>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="relative text-center">

                                <div class="d-inline-block text-center m-4 wow fadeInRight" data-wow-delay=".2s">
                                    <h4 class="fw-bold mb-1 fs-24">Trusted Platform</h4>
                                    <div class="de-rating-ext fs-18">
                                        <span class="d-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                        <div class="fs-14 mb-0">
                                            Rated by <span class="fw-bold">1,000+ users</span>
                                        </div>
                                        <img src="<?php echo $domain ?>assets/images/misc/trustpilot-invert.webp" class="w-100px" alt="">
                                    </div>
                                </div>

                                <div class="d-inline-block text-center m-4 wow fadeInRight" data-wow-delay=".4s">
                                    <h4 class="fw-bold mb-1 fs-24">4.8 out of 5</h4>
                                    <div class="de-rating-ext fs-18">
                                        <span class="d-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                        <div class="fs-14 mb-0">
                                            Based on <span class="fw-bold">verified reviews</span>
                                        </div>
                                        <img src="<?php echo $domain ?>assets/images/misc/google.webp" class="w-100px" alt="">
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </section>





            <section class="bg-color-op-1 rounded-1 mx-4 mt-4">
                <div class="container">
                    <div class="row align-items-center g-4">
                        <div class="col-lg-8">
                            <div class="subtitle id-color wow fadeInUp">Do you have</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Any questions?</h2>
                        </div>
                    </div>

                    <div class="row g-custom-4">

                        <div class="col-lg-6 wow fadeInUp">
                            <div class="accordion secondary">
                                <div class="accordion-section">

                                    <div class="accordion-section-title" data-tab="#accordion-1">
                                        What is Asfast and how does it work?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-1">
                                        <p>
                                            Asfast is a digital finance platform that allows users to buy and sell
                                            cryptocurrencies, manage a secure wallet, pay bills, and redeem unused
                                            gift cards for instant cash—all in one app.
                                        </p>
                                    </div>

                                    <div class="accordion-section-title" data-tab="#accordion-2">
                                        Is my wallet and transaction data secure?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-2">
                                        <p>
                                            Yes. Asfast uses advanced security measures to protect your wallet,
                                            personal information, and transactions. We prioritize user safety and
                                            data privacy at every level.
                                        </p>
                                    </div>

                                    <div class="accordion-section-title" data-tab="#accordion-3">
                                        What cryptocurrencies can I trade on Asfast?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-3">
                                        <p>
                                            You can trade popular cryptocurrencies such as Bitcoin, Ethereum,
                                            USDT, and other supported digital assets. New assets are added regularly
                                            to meet user demand.
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 wow fadeInUp">
                            <div class="accordion secondary">
                                <div class="accordion-section">

                                    <div class="accordion-section-title" data-tab="#accordion-b-4">
                                        Can I convert gift cards to cash instantly?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-b-4">
                                        <p>
                                            Yes. Asfast allows you to redeem unused gift cards from popular brands
                                            and convert them to cash quickly at competitive rates.
                                        </p>
                                    </div>

                                    <div class="accordion-section-title" data-tab="#accordion-b-5">
                                        Can I buy airtime and data on Asfast?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-b-5">
                                        <p>
                                            Absolutely. You can buy airtime, purchase data bundles, and pay utility
                                            bills directly from your Asfast account with ease.
                                        </p>
                                    </div>

                                    <div class="accordion-section-title" data-tab="#accordion-b-6">
                                        How long do transactions take?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-b-6">
                                        <p>
                                            Most transactions on Asfast are processed instantly or within a few
                                            minutes, depending on network conditions and transaction type.
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section>
                <div class="container">
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-6">
                            <div class="text-center">
                                <div class="subtitle id-color">Contact Support</div>
                                <h2 class="wow fadeInUp">Get In Touch With Asfast</h2>
                                <p class="lead col-lg-10 offset-lg-1">
                                    Need help with your wallet, transactions, or account?
                                    Our support team is always ready to assist you.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row g-4 gx-5 justify-content-center">

                        <div class="col-lg-4">
                            <div class="h-100 bg-color text-light p-40 rounded-1">

                                <div class="relative mb-4">
                                    <i class="abs fs-32 p-3 bg-white rounded-1 icofont-location-pin id-color"></i>
                                    <div class="ms-80px">
                                        <div class="fw-bold text-white">Office Address</div>
                                        Global • Digital Operations
                                    </div>
                                </div>

                                <div class="relative mb-4">
                                    <i class="abs fs-32 p-3 bg-white rounded-1 icofont-envelope id-color"></i>
                                    <div class="ms-80px">
                                        <div class="fw-bold text-white">Email Support</div>
                                        <?php echo $siteemail ?>
                                    </div>
                                </div>

                                <div class="relative mb-4">
                                    <i class="abs fs-32 p-3 bg-white rounded-1 icofont-phone id-color"></i>
                                    <div class="ms-80px">
                                        <div class="fw-bold text-white">Customer Care</div>
                                        +234 XXX XXX XXXX
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-7">
                            <div class="p-4 bg-color-op-3 rounded-1">
                                <form name="contactForm" id="contact_form" method="post" action="#">
                                    <div class="row g-4">

                                        <div class="col-md-6">
                                            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                        </div>

                                        <div class="col-md-6">
                                            <input type="text" name="email" class="form-control" placeholder="Your Email" required>
                                        </div>

                                        <div class="col-md-6">
                                            <input type="text" name="phone" class="form-control" placeholder="Phone Number" required>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="relative">
                                                <select name="services" class="form-control">
                                                    <option value="Crypto Trading">Crypto Trading</option>
                                                    <option value="Wallet Support">Wallet Support</option>
                                                    <option value="Bills Payment">Bills Payment</option>
                                                    <option value="Gift Card Redemption">Gift Card Redemption</option>
                                                    <option value="Account Issues">Account Issues</option>
                                                </select>
                                                <i class="absolute top-0 end-0 id-color pt-3 pe-3 icofont-simple-down"></i>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <textarea name="message" class="form-control h-100px" placeholder="Your Message" required></textarea>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="text-center">
                                                <input type="submit" value="Send Message" class="btn-main">
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


        </div>
        <!-- content close -->

        <!-- footer begin -->
        <footer class="footer-light">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-lg-4 col-sm-6">
                        <img style="width:200px" src="<?php echo $domain ?>assets/images/logo.png" alt="">
                        <div class="spacer-20"></div>
                        <p>Unlock the full potential of your online presence with Seoly, where innovation meets optimization. In today's digital landscape, visibility is paramount, and our tailored SEO solutions are crafted to ensure your brand shines brightly amidst the competition.</p>

                        <div class="social-icons mb-sm-30">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 order-lg-1 order-sm-2">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="widget">
                                    <h5>Company</h5>
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="services.html">Our Services</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="about.html">Faq</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 order-lg-2 order-sm-1">
                        <div class="widget">
                            <div class="fw-bold text-dark"><i class="icofont-location-pin me-2 id-color"></i>Office Location</div>
                            100 S Main St, Los Angeles, CA

                            <div class="spacer-20"></div>

                            <div class="fw-bold text-dark"><i class="icofont-envelope me-2 id-color"></i>Send a Message</div>
                            <?php echo $siteemail ?>

                            <div class="spacer-20"></div>

                            <div class="fw-bold text-dark"><i class="icofont-envelope me-2 id-color"></i>Make a Phone Call</div>
                            +929 333 9296 / +929 333 9297
                        </div>
                    </div>
                </div>
            </div>
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="de-flex">
                                <div class="de-flex-col">
                                    Copyright 2025 - <a href="https://spotwebtech.com.ng/">Develop And Build By SPOTWEBTECH</a>
                                </div>
                                <ul class="menu-simple">
                                    <li><a href="#">Terms &amp; Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->
    </div>

    <!-- overlay content begin -->
    <div id="extra-wrap">
        <div id="btn-close">
            <span></span>
            <span></span>
        </div>

        <div id="extra-content">
            <img src="<?php echo $domain ?>assets/images/logo.png" class="" style="width:200px " alt="">

            <div class="spacer-30-line"></div>

            <h5 class="mb-3">Our Services</h5>

            <ul class="ul-check">
                <li><a href="services.html">Keyword Research</a></li>
                <li><a href="services.html">On-Page SEO</a></li>
                <li><a href="services.html">Off-Page SEO</a></li>
                <li><a href="services.html">Technical SEO</a></li>
                <li><a href="services.html">Local SEO</a></li>
                <li><a href="services.html">Content Marketing</a></li>
            </ul>


            <div class="spacer-30-line"></div>

            <h5>Contact Us</h5>
            <div><i class="icofont-clock-time me-2"></i>Monday - Saturday 08.00 - 18.00</div>
            <div><i class="icofont-location-pin me-2"></i>100 S Main St, New York, </div>
            <div><i class="icofont-envelope me-2"></i><?php echo $siteemail ?></div>

            <div class="spacer-30-line"></div>

            <h5>About Us</h5>
            <p>Unlock the full potential of your online presence with Seoly, where innovation meets optimization. In today's digital landscape, visibility is paramount, and our tailored SEO solutions are crafted to ensure your brand shines brightly amidst the competition.</p>

            <div class="social-icons">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
        </div>
    </div>
    <!-- overlay content end -->

    <div id="buy-now" class="show-on-scroll">
        <a class="btn-buy" href="https://themeforest.net/item/seoly-seo-digital-marketing-website-template/59360786" target="_blank">Download Now<img src="demo/envato.svg" alt=""></a>
    </div>

    <!-- Javascript Files
    ================================================== -->
    <script src="<?php echo $domain ?>assets/js/vendors.js"></script>
    <script src="<?php echo $domain ?>assets/js/designesia.js"></script>
    <script src="<?php echo $domain ?>assets/js/custom-marquee.js"></script>

</body>

</html>