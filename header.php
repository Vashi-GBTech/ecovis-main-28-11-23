<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOVISRKCA - Ecovis</title>
    <!-- font-awesome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap css cdn  -->
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap/bootstrap.css">

    <!-- custom css link  -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- jquery cdn  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"
        integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- bootstrap javascript cdn  -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- google font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <!-- oul carousel link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- animate css cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>
<style>
    .menu ul a .underline {
        height: 3px;
        background-color: transparent;
        width: 0%;
        transition: width 0.2s, background-color 0.5s;
        margin: 0 auto;
    }

    .menu ul a.active-link .underline {
        width: 100%;
        background-color: crimson;
    }
    .menu ul a.active-link{
        color: crimson !important;
    }
    .menu ul a:hover .underline {
        background-color: crimson;
        width: 100%;
    }

    .menu ul a.nav-link {
        padding: 0px !important;
        
    }

    .menu ul a:active li {
        transition: none;
        color: rgba(255, 255, 255, 0.76);
    }

    .menu ul a:active .underline {
        transition: none;
        background-color: rgba(255, 255, 255, 0.76);
    }
</style>

<body>
    <header>
        <div class="row mx-0">
            <div
                class="align-items-center col-md-12 bg-danger contact-header d-flex justify-content-end px-4 py-1 small text-light">
                <a href="./NewsLetter" style="text-decoration: none; font-size:medium; font-weight: 500;"
                    class="text-light"> <span><i class="fa-solid fa-newspaper"></i></span> NewsLetter</a>
                <a href="#" style="text-decoration: none; font-size:medium; font-weight: 500;" class="text-light ml-3">
                    <span><i class="fa-solid fa-envelope"></i></span> Info@ecovisrkca.com</a>
            </div>
            <div class="align-items-center col-md-12 d-flex justify-content-between main-header">
                <div class="logo py-2 text-center">
                    <a href="./index" id='ecovis-logo'><img src="./ecovis-images/ecovis-logo.jpeg" alt=""></a>
                </div>
                <div style="display:none;" class="w-50" id="searchbar_section">
                    <div class="align-items-center d-flex px-4 searchbar ">
                        <input type="search" name="searchbar" placeholder="Search..." autofocus="" id="searchbar"
                            class="bg-light pl-3 border-0 normalText form-control w-100">
                        <span id="closeSearchBar"><i class="fa-solid text-danger fa-xmark"></i></span>
                    </div>
                </div>
                <div id="menu" class="menu" style="width: 60%; z-index:50;">
                    <ul class="d-flex mb-0 justify-content-around list-unstyled">
                        <a href="./index" class='nav-link active-link' id='home-a'>
                            <li class="">Home</li>
                            <div class="underline"></div>
                        </a>
                        <a href="#" class='nav-link ' id='about_us-a'>
                            <li id="about_us" class="about_us">About Us</li>
                            <div class="underline"></div>
                        </a>

                        <a href="./client_stories" class='nav-link ' id='aclient_stories-a'>
                            <li id="client_stories">Client Stories</li>
                            <div class="underline"></div>
                        </a>

                        <a href="./collaborate" class='nav-link ' id='collaborate-a'>
                            <li>mentor bi</li>
                            <div class="underline"></div>
                        </a>

                        <a href="#" class='nav-link ' id='services-a'>
                            <li id="services">Practice Areas</li>
                            <div class="underline"></div>
                        </a>

                        <a href="./team" class='nav-link ' id='team-a'>
                            <li>Experts on Board</li>
                            <div class="underline"></div>
                        </a>

                        <!-- <a href="./NewsLetter">
                            <li>Newsletter</li>
                        </a> -->
                        <!-- <a href="./careers">
                            <li>Careers</li>
                        </a> -->
                        <a href="./contact_us" class='nav-link ' id='contact_us-a'>
                            <li>Contact Us</li>
                            <div class="underline"></div>
                        </a>

                        <a href="#" id="toggleSearch">
                            <li><span><i class="fa-solid text-danger fa-magnifying-glass"></i></span></li>
                        </a>
                    </ul>

                </div>
                <span id="menu_icon" class="menu_icon mr-3 d-none" style="font-size: x-large;"><i
                        class="fa-solid fa-bars"></i></span>
            </div>
        </div>
        <!-- about us -->
        <div class=" row position-absolute " style="display: none; z-index: 1; right: 0; left: 0;" id="aboutUs_menu">
            <div class="col-md-4 pr-0 text-center" style="background: linear-gradient(0deg, #CD1432, #dc4f54);">
                <div class="bg-light mt-5 mx-auto px-2 py-2 rounded-circle" style="width: 111px;">
                    <img src="./images/ecovis_logoes/Ecovis_rkca_logo_ball2.png" alt="" class="rounded-circle">
                </div>
                <h4 class="text-light  mt-3">Let’s Connect</h4>
                <p class="mx-auto text-justify text-light mt-3 w-75">RKCA is an organization excelled by its Competency
                    Centers with more than 5 decades of presence in India, having a global footprint with associates in
                    more than 90+ countries. Our Purpose is to mentor Entities of today to be MNC’s for tomorrow.</p>
                <a href="./contact_us"><button class="btn header_connectBTN mb-4 font-weight-bold text-light">CONTACT
                        US</button></a>
            </div>
            <div class="col-md-4 ourPresents pt-4">
                <h3 class="font-weight-normal d-inline ml-4 mt-3">Our Presence </h3>
                <ul class="list-unstyled">
                    <li class="justify-content-between mb-3 mt-4">
                        <div class="align-items-center row">
                            <a href="./ecovis_india" class="d-flex justify-content-between text-dark w-100"
                                style=" text-decoration: none;">
                                <div class="col-3 pr-0 text-center w-75">
                                    <i class="fa-solid fa-location-pin text-danger" style="font-size: 2.5rem; "></i>
                                </div>
                                <div class="col-9 pl-0">
                                    <span>India</span>
                                    <p></p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="justify-content-between mb-1">
                        <div class="align-items-center row">
                            <a href="./ecovis_International" class="d-flex justify-content-between text-dark w-100"
                                style=" text-decoration: none;">

                                <div class="col-3 pr-0 text-center w-75">
                                    <i class="fa-solid fa-earth-asia" style="font-size: 2.5rem; "></i>
                                </div>
                                <div class="col-9 pl-0">
                                    <span>Ecovis International</span>
                                    <p></p>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>

            </div>
            <div class="col-md-4 ourValues pt-4">
                <h3 class=" d-inline ml-4 mt-3">Our Values</h3>
                <ul class="list-unstyled">
                    <li class="mt-4">
                        <div class="align-items-center mb-2 row">
                            <div class="col-3 pr-0 text-center w-75">
                                <img src="./ecovis_icons/r_in.png" class="" style="width: 84%;">
                            </div>
                            <div class="col-9 pl-0">
                                <h4 class="mb-0 font-weight-normal" style="color:#4b4d4f !important"><span
                                        style="color: #CD1432;">R</span>esponsibility</h4>
                                <p class="mb-0" style="color: #4b4d4f !important;">Towards profession</p>
                            </div>
                        </div>
                    </li>
                    <li class="">
                        <div class="align-items-center mb-2 row">
                            <div class="col-3 pr-0 text-center w-75">
                                <img src="./ecovis_icons/k_in.png" class="" alt="" style="width: 88%;">
                            </div>
                            <div class="col-9 pl-0">
                                <h4 class="mb-0 font-weight-normal" style="color:#4b4d4f !important"><span
                                        style="color: #CD1432;">K</span>nowledge</h4>
                                <p class="mb-0" style="color: #4b4d4f !important;">In people</p>
                            </div>
                        </div>
                    </li>
                    <li class="">
                        <div class="align-items-center mb-2 row">
                            <div class="col-3 pr-0 text-center w-75">
                                <img src="./ecovis_icons/c_in.png" style="width: 60%;" alt="">
                            </div>
                            <div class="col-9 pl-0">
                                <h4 class="mb-0 font-weight-normal" style="color:#4b4d4f !important"><span
                                        style="color: #CD1432;">C</span>ommitment</h4>
                                <p class="mb-0" style="color: #4b4d4f !important;">For Clients</p>
                            </div>
                        </div>
                    </li>
                    <li class="">
                        <div class="align-items-center mb-2 row">
                            <div class="col-3 pr-0 text-center w-75">
                                <img src="./ecovis_icons/a_in.png" class="" alt="" style="width: 84%;">
                            </div>
                            <div class="col-9 pl-0">
                                <h4 class="mb-0 font-weight-normal" style="color:#4b4d4f !important"><span
                                        style="color: #CD1432;">A</span>ccountability</h4>
                                <p class="mb-0" style="color: #4b4d4f !important;">to Society</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- services  -->

        <div class="mx-0 row  position-absolute " style="display: none; z-index: 1;" id="services_menu">
            <div class="col-md-4 text-center" style="background: linear-gradient(0deg, #CD1432, #dc4f54);">
                <div class="mt-5 mx-auto px-2 py-2 rounded-circle" style="width: 210px;">
                    <img src="./images/ecovis_logoes/Mentor_bi.png" alt="" class="rounded-circle w-100">
                </div>
                <h4 class="text-light  mt-3">Let’s Connect</h4>
                <P class="mx-auto text-justify text-light w-75">RKCA is an organization excelled by its Competency
                    Centers with more than 5 decades of presence in India, having a global footprint with associates in
                    more than 90+ countries. Our Purpose is to mentor Entities of today to be MNC’s for tomorrow.
                </P>
                <button class="btn header_connectBTN font-weight-bold text-light">CONTACT US</button>
            </div>

            <div class="col-md-8 ourValues d-flex">
                <div class="w-100 my-4">
                    <h3 class="font-weight-normal d-inline ml-4"> Centre of Excellence -COE </h3>
                    <div class="row mt-3">
                        <div class="col-md-6 col-sm-12">
                            <ul class="list-unstyled">
                                <a href="./Strategy_Performance_Consulting_services" style="text-decoration: none;"
                                    class="text-dark">
                                    <li class="mb-1 serviceList">
                                        <div class="align-items-center row">
                                            <div class="col-3 pr-0 text-center w-75">
                                                <img src="./images/ecovis_logoes/Core-Creators-Logo-768x260.png"
                                                    class="" style="width: 75%;" alt="">
                                            </div>
                                            <div class="col-9 pl-0">
                                                <h5 class="mb-1 serviceName">Strategy and Performance Consulting</h5>
                                                <p class="mb-0 small">Goal-oriented service focuses on the gaps between
                                                    business and performance outcomes</p>
                                            </div>
                                        </div>
                                    </li>
                                </a>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <ul class="list-unstyled">
                                <a href="./LitigationLegalServices" style="text-decoration: none;" class="text-dark">
                                    <li class="mb-1 serviceList">
                                        <div class="align-items-center row">
                                            <div class="col-3 pr-0 text-center w-75  ">
                                                <img src="./images/ecovis_logoes/rkca-law-associates-lawyer-job-mumbai-1.png"
                                                    class="" style="width: 75%;" alt="">
                                            </div>
                                            <div class="col-9 pl-0">
                                                <h5 class="mb-1 serviceName">Legal and GRC Services</h5>
                                                <p class="mb-0 small">Aiding you with legal advises and policies</p>
                                            </div>
                                        </div>
                                    </li>
                                </a>
                            </ul>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6 col-sm-12">
                            <ul class="list-unstyled mb-0">
                                <a href="./Onshore_Offshore_Advisory" style="text-decoration: none;" class="text-dark">
                                    <li class="mb-1 serviceList">
                                        <div class="align-items-center row">
                                            <div class="col-3 pr-0 text-center w-75    ">
                                                <img src="./images/ecovis_logoes/rkda.png" class="" style="width: 100%;"
                                                    alt="">
                                            </div>
                                            <div class="col-9 pl-0">
                                                <h5 class="mb-1 serviceName">Business Support and Financial Reporting
                                                </h5>
                                                <p class="mb-0 small">Efficient business support is crucial for accurate
                                                    financial reporting and sustained organizational growth.</p>
                                            </div>
                                        </div>
                                    </li>
                                </a>
                            </ul>

                        </div>
                        <div class="col-md-6 col-sm-12">
                            <ul class="list-unstyled mb-0">
                                <a href="./Financial_and_Capital_Services" style="text-decoration: none;"
                                    class="text-dark">
                                    <li class="mb-1 serviceList">
                                        <div class="align-items-center row">
                                            <div
                                                class="col-3 pr-0 text-center w-75  menu_services_logo financial_capital_Services">
                                                <!-- <img src="./ecovis_icons/TAXATION-removebg.png" class="" style="width: 75%;"
                                                alt=""> -->
                                            </div>
                                            <div class="col-9 pl-0">
                                                <h5 class="mb-1 serviceName">Financial & Capital Services</h5>
                                                <p class="mb-0 small">Offering services to make your business
                                                    financially sound</p>
                                            </div>
                                        </div>
                                    </li>
                                </a>
                            </ul>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6 col-sm-12">
                            <ul class="list-unstyled mb-0">
                                <a href="./Digital_transformation" style="text-decoration: none;" class="text-dark">
                                    <li class="mb-1 serviceList">
                                        <div class="align-items-center row">
                                            <div class="col-3 pr-0 text-center w-75 ">
                                                <img src="./images/ecovis_logoes/gbtLogo.png" class=""
                                                    style="width: 75%;" alt="">
                                            </div>
                                            <div class="col-9 pl-0">
                                                <h5 class="mb-1 serviceName">Digital Transformations</h5>
                                                <p class="mb-0 small">Transform and foster your business with our tech
                                                    experts and Data analytics team</p>
                                            </div>
                                        </div>
                                    </li>
                                </a>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--<div class="d-flex mt-2">
                            <div class="w-50">
                                <ul class="list-unstyled">
                                    <li class="mb-1 d-flex justify-content-between align-items-center">
                                        <div class="align-items-center row">
                                            <div class="col-3 pr-0 text-center menu_services_logo Strategy_Performance_Consulting_logo  w-75">
                                            
                                            </div>
                                            <div class="col-9 pl-0">
                                                <h5 class="mb-1">Assurance</h5>
                                                <p class="small">Giving you the certainty to drive straightforward
                                                    development
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-1 d-flex justify-content-between align-items-center">
                                        <div class="align-items-center row">
                                            <div class="col-3 pr-0 text-center w-75  menu_services_logo Strategy_Performance_Consulting_logo">
                                                <img src="./ecovis_icons/TAXATION-removebg.png" class="" style="width: 75%;"
                                                    alt="">
                                            </div>
                                            <div class="col-9 pl-0">
                                                <h5 class="mb-1">Taxation</h5>
                                                <p class="small">Assisting companies with accounting and tax commitments</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="mb-1 d-flex justify-content-between align-items-center">
                                        <div class="align-items-center row">
                                            <div class="col-3 pr-0 text-center w-75">
                                                <img src="./ecovis_icons/RISK COMPLIANCE.png" class="" style="width: 75%;"
                                                    alt="">
                                            </div>
                                            <div class="col-9 pl-0">
                                                <h5 class="mb-1">Risk & Compliance</h5>
                                                <p class="small">We prepare organizations for any unexpected challenges</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="mb-1 d-flex justify-content-between align-items-center">
                                        <div class="align-items-center row">
                                            <div class="col-3 pr-0 text-center w-75">
                                                <img src="./ecovis_icons/Business-Support.png" class="" style="width: 75%;"
                                                    alt="">
                                            </div>
                                            <div class="col-9 pl-0">
                                                <h5 class="mb-1">Accounting Business support</h5>
                                                <p class="small">Offering accounting business support to grow your business.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="w-50">
                                <ul class="list-unstyled">
                                    <li class="mb-1 d-flex justify-content-between align-items-center">
                                        <div class="align-items-center row">
                                            <div class="col-3 pr-0 text-center w-75">
                                                <img src="./ecovis_icons/LEgal-Support.png" class="" style="width: 75%;"
                                                    alt="">
                                            </div>
                                            <div class="col-9 pl-0">
                                                <h5 class="mb-1">Legal Services</h5>
                                                <p class="small">We create a platform to offer you legal services and
                                                    consultancy</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="mb-1 d-flex justify-content-between align-items-center">
                                        <div class="align-items-center row">
                                            <div class="col-3 pr-0 text-center w-75">
                                                <img src="./ecovis_icons/Growth-Services.png" class="" style="width: 75%;"
                                                    alt="">
                                            </div>
                                            <div class="col-9 pl-0">
                                                <h5 class="mb-1">Growth Services</h5>
                                                <p class="small">We develop your business growth quality</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="mb-1 d-flex justify-content-between align-items-center">
                                        <div class="align-items-center row">
                                            <div class="col-3 pr-0 text-center w-75">
                                                <img src="./ecovis_icons/Digital-Transformation.png" class=""
                                                    style="width: 75%;" alt="">
                                            </div>
                                            <div class="col-9 pl-0">
                                                <h5 class="mb-1">Digital transformation</h5>
                                                <p class="small">Transform and foster your business with our services</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div> -->

        <!-- <div class="mt-2">
                    <h3 class="font-weight-normal d-inline mt-3">Industries</h3>
                    <ul class="list-unstyled mt-3">
                        <li>
                            <h5>Creative</h5>
                        </li>
                        <li>
                            <h5>Technology</h5>
                        </li>
                        <li>
                            <h5>Finance</h5>
                        </li>
                    </ul>

                </div> -->


    </header>

    <script>
        $("#about_us").click(function () {
            $("#aboutUs_menu").slideToggle();
            $("#services_menu").slideUp();
            // $("#menu").slideUp();
        });
        $("#services").click(function () {
            $("#services_menu").slideToggle();
            $("#aboutUs_menu").slideUp();
            // $("#menu").slideUp();

        });
        $("#menu_icon").click(function () {
            $("#menu").slideToggle();
            // $("#aboutUs_menu").slideUp();
            // $("#services_menu").slideUp();



        });


        // toggleSearch 
        $("#toggleSearch").click(function () {
            $("#menu").slideToggle(function () {
                $("#searchbar_section").slideToggle();
                // $("#searchbar_section").css({"visibility":"visible"});
            });



        });
        $("#closeSearchBar").click(function () {
            $("#searchbar_section").slideToggle(function () {
                // $("#searchbar_section").css({"visibility":"hidden"});
                $("#menu").slideToggle();

            });
        });

        // $(document).mouseup(function(e) {
        //     if ($(e.target).closest("#menu").length === 0 && $(e.target).closest("#menu_icon").length === 0) {
        //         $("#menu").slideUp();
        //     }
        // });
        $(document).mouseup(function (e) {
            if ($(e.target).closest("#aboutUs_menu").length === 0 && $(e.target).closest("#about_us").length === 0 && $(e.target).closest("header").length === 0) {
                $("#aboutUs_menu").slideUp();
            }
        });
        $(document).mouseup(function (e) {
            if ($(e.target).closest("#services_menu").length === 0 && $(e.target).closest("#services").length === 0) {
                $("#services_menu").slideUp();
            }
        });
    </script>

    <script>
        $(document).ready(function () {
            // Check local storage for active link information
            const activeLink = localStorage.getItem('activeLink');
            if (activeLink) {
                $('.active-link').removeClass('active-link');
                $(activeLink).addClass('active-link');
            }

            // Apply click event to links
            $('.nav-link').on('click', function () {
                // Remove active link from all links
                $('.active-link').removeClass('active-link');

                // Add active-link class to clicked link
                $(this).addClass('active-link');

                // Store active link information in local storage
                const activeLinkId = '#' + $(this).attr('id');
                localStorage.setItem('activeLink', activeLinkId);
            });

            $('#ecovis-logo').on('click', function (e) {
                e.preventDefault(); // Prevent the default action of the link

                $('.active-link').removeClass('active-link');
                $('#home-a').addClass('active-link');
                const activeLinkId = '#home-a';
                localStorage.setItem('activeLink', activeLinkId);

                const currentURL = window.location.href;

                // Extract the base URL without the page name
                const baseURL = currentURL.substring(0, currentURL.lastIndexOf('/') + 1);

                // Define the page you want to navigate to
                const pageToNavigate = 'index'; // Replace with your desired page name

                // Construct the new URL by combining the base URL and the page name
                const newURL = baseURL + pageToNavigate;

                // Navigate to the new URL
                window.location.href = newURL;
            });
        });

    </script>

</body>

</html>