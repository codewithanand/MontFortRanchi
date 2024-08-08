<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @yield('title')
    </title>

    <link rel="icon" href="settings/September2023/xtU6PVhOMAu9dFCsD8ya.png" type="image/x-icon">



    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">


    <!-- Favicon -->
    <link href="https://www.montfortranchiorg.com/site/img/favicon.ico" rel="icon">



    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="https://www.montfortranchiorg.com/site/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Styles -->
    <link href="https://www.montfortranchiorg.com/site/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

    @yield('styles')
</head>

<body>
    <!-- Topbar Start -->
    <!-- Topbar Start -->
    <div class="container-fluid d-none d-lg-block">
        <div class="py-4 row align-items-center px-xl-5">
            <div class="col-lg-2 size">
                <!-- <a href="" class="text-decoration-none"> -->
                <!-- <h1 class="m-0"><span class="text-primary">E</span>COURSES</h1> -->
                <img src="https://montfortranchiorg.com/storage/themes/September2023/lV9jowHlzdUFEv57gIvk.png"
                    alt="logo">
                <!-- </a> -->
            </div>
            <div class="text-right col-lg-3">
                <div class="d-inline-flex align-items-center">
                    <i class="mr-3 fa fa-2x fa-map-marker-alt text-primary"></i>
                    <div class="text-left">
                        <h6 class="mb-1 font-weight-semi-bold">Montfort Niwas</h6>
                        <small>Provincial House, Kanke, Ranchi-834006 Jharkhand</small>
                    </div>
                </div>
            </div>
            <div class="text-right col-lg-3">
                <div class="d-inline-flex align-items-center">
                    <i class="mr-3 fa fa-2x fa-envelope text-primary"></i>
                    <div class="text-left">
                        <h6 class="mb-1 font-weight-semi-bold">Email Us</h6>
                        <small>sgkanke@gmail.com</small>
                    </div>
                </div>
            </div>
            <div class="text-right col-lg-3">
                <div class="d-inline-flex align-items-center">
                    <i class="mr-3 fa fa-2x fa-phone text-primary"></i>
                    <div class="text-left">
                        <h6 class="mb-1 font-weight-semi-bold">Call Us</h6>
                        <small>+91-9431103214 / +91-9431108522</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">
            <div class="col-lg-2 d-none d-lg-block">
                <!-- <a class="d-flex align-items-center justify-content-between bg-secondary w-100 text-decoration-none" data-toggle="collapse" href="#navbar-vertical" style="height: 67px; padding: 0 30px;">
                    <h5 class="m-0 text-primary"><i class="mr-2 fa fa-book-open"></i>Subjects</h5>
                    <i class="fa fa-angle-down text-primary"></i>
                </a>
                <nav class="p-0 border collapse position-absolute navbar navbar-vertical navbar-light align-items-start border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 9;">
                    <div class="navbar-nav w-100">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Web Design <i class="float-right mt-1 fa fa-angle-down"></i></a>
                            <div class="m-0 border-0 dropdown-menu position-absolute bg-secondary rounded-0 w-100">
                                <a href="" class="dropdown-item">HTML</a>
                                <a href="" class="dropdown-item">CSS</a>
                                <a href="" class="dropdown-item">jQuery</a>
                            </div>
                        </div>
                        <a href="" class="nav-item nav-link">Apps Design</a>
                        <a href="" class="nav-item nav-link">Marketing</a>
                        <a href="" class="nav-item nav-link">Research</a>
                        <a href="" class="nav-item nav-link">SEO</a>
                    </div>
                </nav> -->
            </div>
            <div class="col-lg-10">
                <nav class="px-0 py-2 navbar navbar-expand-lg bg-light navbar-light py-lg-0">
                    <a href="" class="text-decoration-none d-block d-lg-none ">
                        <!-- <h1 class="m-0"><span class="text-primary">E</span>COURSES</h1> -->
                        <img src="http:montfortranchiorg.com//storage/themes/September2023/lV9jowHlzdUFEv57gIvk.png"
                            alt="logo">

                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse"
                        data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">

                        <div class="py-0 navbar-nav">





                            <a href="{{ url('/') }}" target="_self" class="nav-item nav-link " style="">

                                Home
                            </a>


                            <div class="nav-item dropdown">
                                <a href="https://www.montfortranchiorg.com/About Us" target="_self"
                                    class="nav-link dropdown-toggle " style="" data-toggle="dropdown">

                                    About Us
                                </a>
                                <div class="m-0 dropdown-menu rounded-0">





                                    <a href="https://www.montfortranchiorg.com/founder" target="_self"
                                        class="dropdown-item " style="">

                                        Our Founder
                                    </a>




                                    <a href="https://www.montfortranchiorg.com/re-founder" target="_self"
                                        class="dropdown-item " style="">

                                        Re-Founder
                                    </a>




                                    <a href="https://www.montfortranchiorg.com/our-pioneers" target="_self"
                                        class="dropdown-item " style="">

                                        our pioneers
                                    </a>




                                    <a href="https://www.montfortranchiorg.com/Founderwriting" target="_self"
                                        class="dropdown-item " style="">

                                        Founderwriting
                                    </a>




                                    <a href="https://www.montfortranchiorg.com/from-the-provincial-superior"
                                        target="_self" class="dropdown-item active" style="">

                                        From the Provincial Superior
                                    </a>




                                    <a href="https://www.montfortranchiorg.com/statistics" target="_self"
                                        class="dropdown-item " style="">

                                        Statistics
                                    </a>




                                    <a href="https://www.montfortranchiorg.com/provisional-administration"
                                        target="_self" class="dropdown-item " style="">

                                        Provisional Administration
                                    </a>




                                    <a href="https://www.montfortranchiorg.com/history-ranchi-province" target="_self"
                                        class="dropdown-item " style="">

                                        History Ranchi Province
                                    </a>




                                    <a href="https://www.montfortranchiorg.com/vision-and-mission" target="_self"
                                        class="dropdown-item " style="">

                                        VISION &amp; MISSION
                                    </a>


                                </div>


                            </div>


                            <div class="nav-item dropdown">
                                <a href="https://www.montfortranchiorg.com/institutions" target="_self"
                                    class="nav-link dropdown-toggle " style="" data-toggle="dropdown">

                                    Institutions
                                </a>
                                <div class="m-0 dropdown-menu rounded-0">





                                    <a href="https://www.montfortranchiorg.com/statistics" target="_self"
                                        class="dropdown-item " style="">

                                        Seceretaries
                                    </a>




                                    <a href="https://www.montfortranchiorg.com/annual-report" target="_self"
                                        class="dropdown-item " style="">

                                        Annual report
                                    </a>


                                </div>


                            </div>



                            <a href="https://www.montfortranchiorg.com/website" target="_self"
                                class="nav-item nav-link " style="">

                                Website
                            </a>



                            <a href="https://www.montfortranchiorg.com/Education" target="_self"
                                class="nav-item nav-link " style="">

                                Education
                            </a>



                            <a href="{{ url('/gallery') }}" target="_self" class="nav-item nav-link "
                                style="">

                                Gallery
                            </a>



                            <a href="https://www.montfortranchiorg.com/Contact" target="_self"
                                class="nav-item nav-link " style="">

                                Contact
                            </a>


                            <div class="nav-item dropdown">
                                <a href="https://www.montfortranchiorg.com/blog" target="_self"
                                    class="nav-link dropdown-toggle " style="" data-toggle="dropdown">

                                    News &amp; Events
                                </a>
                                <div class="m-0 dropdown-menu rounded-0">





                                    <a href="https://www.montfortranchiorg.com/blog/news-bulletin" target="_self"
                                        class="dropdown-item " style="">

                                        News bulletin
                                    </a>




                                    <a href="https://www.montfortranchiorg.com/blog\up-coming-events" target="_self"
                                        class="dropdown-item " style="">

                                        Up-coming Events
                                    </a>




                                    <a href="https://www.montfortranchiorg.com/blog\annual-Programmed-of-PROVINCE"
                                        target="_self" class="dropdown-item " style="">

                                        Annual Programme of PROVINCE
                                    </a>


                                </div>


                            </div>

                        </div>


                        <!-- <a class="px-4 py-2 ml-auto btn btn-primary d-none d-lg-block" href="">Join Now</a> -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->

    <!-- Header End -->
    @yield('content')

    <!-- Footer Start -->
    <div class="text-white py-5_ container-fluid bg-dark px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="pt-5 row">
            <div class="col-lg-7 col-md-12">
                <div class="row">
                    <div class="mb-5 col-md-6">
                        <h5 class="mb-4 text-secondary text-uppercase" style="letter-spacing: 5px;">Get In Touch</h5>
                        <p><i class="mr-2 fa fa-map-marker-alt"></i>Montfort Niwas, St. Joseph’s School
                            Campus,Kanke,Ranchi-834 006, Jharkhand</p>
                        <p><i class="mr-2 fa fa-phone-alt"></i>+91 9431108522</p>
                        <p><i class="mr-2 fa fa-envelope"></i>sgkanke@gmail.com,</p>
                        <div class="mt-4 d-flex justify-content-start">
                            <a class="mr-2 btn btn-outline-light btn-square" href="#"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="mr-2 btn btn-outline-light btn-square" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="mr-2 btn btn-outline-light btn-square" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light btn-square" href="#"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="mb-5 col-md-6">


                    </div>
                </div>
            </div>
            <div class="mb-5 col-lg-5 col-md-12">
                <h5 class="mb-4 text-secondary text-uppercase" style="letter-spacing: 5px;">Newsletter</h5>

                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 30px;"
                            placeholder="Your Email Address">
                        <div class="input-group-append">
                            <button class="px-4 btn btn-primary">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-4 text-white container-fluid bg-dark border-top px-sm-3 px-md-5"
        style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="mb-3 text-center col-lg-6 text-md-left mb-md-0">
                <p class="m-0 text-white">&copy; <a class="text-white"
                        href="https://monfortranchiorg.com/">monfortranchiorg.com</a>. All Rights Reserved.

                </p>
            </div>
            <div class="text-center col-lg-6 text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="py-0 text-white nav-link" href="#">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="py-0 text-white nav-link" href="#">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a class="py-0 text-white nav-link" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="py-0 text-white nav-link" href="#">Help</a>
                    </li>
                </ul>
            </div>
        </div>
    </div> <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i
            class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://www.montfortranchiorg.com/site/lib/easing/easing.min.js"></script>
    <script src="https://www.montfortranchiorg.com/site/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="https://www.montfortranchiorg.com/site/mail/jqBootstrapValidation.min.js"></script>
    <script src="https://www.montfortranchiorg.com/site/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="https://www.montfortranchiorg.com/site/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    @yield('scripts')
</body>

</html>
