<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hhimachalmoverpacker</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/37f2f345ec.js" crossorigin="anonymous"></script>

    <style>

        /* The Modal (background) */
        .modala {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: #474e5d;
            padding-top: 50px;
        }

        /* Modal Content/Box */
        .modala-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }



        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 35px;
            top: 15px;
            font-size: 40px;
            font-weight: bold;
            color: #f1f1f1;
        }

        .close:hover,
        .close:focus {
            color: #f44336;
            cursor: pointer;
        }

        /* Clear floats */
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

    </style>
</head>

<body>
<!-- Header Start -->
<div class="container-fluid">

    @if (session('status'))

        <div class="m-2 alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="row">
        <div class="col-lg-3 bg-secondary d-none d-lg-block">
            <a href="" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                <h2 class="m-0 display-3 text-primary">packer</h2>
            </a>
        </div>
        <div class="col-lg-9">
            <div class="row bg-dark d-none d-lg-flex">
                <div class="col-lg-7 text-left text-white">
                    <div class="h-100 d-inline-flex align-items-center border-right border-primary py-2 px-3">
                        <i class="fa fa-envelope text-primary mr-2"></i>
                        <small>info@himachalmoversandpackers.com
                        </small>
                    </div>
                    <div class="h-100 d-inline-flex align-items-center py-2 px-2">
                        <i class="fa fa-phone-alt text-primary mr-2"></i>
                        <small>+91-9569788001

                        </small>
                    </div>
                </div>
                <div class="col-lg-5 text-right">
                    <div class="d-inline-flex align-items-center pr-2">
                        <a class="text-primary p-2" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-primary p-2" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-primary p-2" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-primary p-2" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-primary p-2" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
                <a href="" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 display-4 text-primary">packer</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="#" class="nav-item nav-link active">Home</a>
                        <a href="#aboutus" class="nav-item nav-link">About Us</a>
                        <a href="#services" class="nav-item nav-link">Service</a>


                        <a href="#contactus" class="nav-item nav-link">Contact Us</a>
                    </div>
                    <button class="btn btn-primary mr-3 d-none d-lg-block" onclick="document.getElementById('id01').style.display='block'">Get A Quote</button>
                    <div id="id01" class="modala"style="z-index:9999;">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <x-forms.quotation-form />
                    </div>

                </div>

            </nav>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#header-carousel" data-slide-to="1"></li>
            <li data-target="#header-carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-fluid" src="img/carousel-2.jpg" alt="Image">
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <div class="p-5" style="width: 100%; max-width: 900px;">
                        <h5 class="text-primary text-uppercase mb-md-3">Are you looking for</h5>
                        <h2 class="display-3 text-white mb-md-4">
                            warehousing services?</h2>
                        <a href="" class="btn btn-primary">Get A Quote</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="img-fluid" src="img/carousel-1.jpg" alt="Image">
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <div class="p-5" style="width: 100%; max-width: 900px;">
                        <h5 class="text-primary text-uppercase mb-md-3">Are you looking for</h5>
                        <h1 class="display-3 text-white mb-md-4">
                            Transportation?</h1>
                        <a href="" class="btn btn-primary">Get A Quote</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="img-fluid" src="img/carousel-3.jpg" alt="Image">
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <div class="p-5" style="width: 100%; max-width: 900px;">
                        <h5 class="text-primary text-uppercase mb-md-3">Are you looking for</h5>
                        <h1 class="display-3 text-white mb-md-4">
                            International Relocation?</h1>
                        <a href="" class="btn btn-primary">Get A Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->


<!-- Contact Info Start -->
<div class="container-fluid pb-5 contact-info">
    <div class="row">
        <div class="col-lg-4 p-0">
            <div class="contact-info-item d-flex align-items-center justify-content-center bg-primary text-white py-4 py-lg-0">
                <i class="fa fa-3x fa-map-marker-alt text-secondary mr-4"></i>
                <div class="">
                    <h5 class="mb-2">Our Office</h5>
                    <p class="m-0">1/3, Palace Colony, Mandi, H.P. - 175001</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 p-0">
            <div class="contact-info-item d-flex align-items-center justify-content-center bg-secondary text-white py-4 py-lg-0">
                <i class="fa fa-3x fa-envelope-open text-primary mr-4"></i>
                <div class="">
                    <h5 class="mb-2">Email Us</h5>
                    <p class="m-0">info@himachalmoversandpackers.com</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 p-0">
            <div class="contact-info-item d-flex align-items-center justify-content-center bg-primary text-white py-4 py-lg-0">
                <i class="fa fa-3x fa-phone-alt text-secondary mr-4"></i>
                <div class="">
                    <h5 class="mb-2">Call Us</h5>
                    <p class="m-0"> +91-9569788001,  +91-9915716984</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Info End -->


<!-- About Start -->
<div id="aboutus" class="container-fluid py-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="d-flex flex-column align-items-center justify-content-center bg-about rounded h-100 py-5 px-3">
                    <i class="fa fa-5x fa-award text-primary mb-4"></i>
                    <h2 class="display-2 text-white mb-2" data-toggle="counter-up">25</h2>
                    <h3 class="text-white m-0">Years Experience</h3>
                </div>
            </div>
            <div class="col-lg-7 pt-5 pb-lg-5">
                <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Learn About Us</h6>
                <h2 class="mb-4 section-title">WELCOME TO HIMANCHAL MOVER PACKER</h2>
                <h5 class="text-muted font-weight-normal mb-3">Himachal Mover Packer 25 Years Experience is a well-established packing and moving company in India, providing home shifting, office shifting, domestic and international relocation and car transportation services. We are renowned for providing quality and superior packing and moving services in India as well as to global countries at the most economical rates. Inspired by our aim of being a leading name in the packers and movers industry.</h5>

                <div class="d-flex align-items-center pt-4">
                    <a href="" class="btn btn-primary mr-5">Learn More</a>
                    <button type="button" class="btn-play" data-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                        <span></span>
                    </button>
                    <h5 class="font-weight-normal text-white m-0 ml-4 d-none d-sm-block">Play Video</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Video Modal Start -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal End -->


<!-- Services Start -->
<div id="services" class="container-fluid bg-service py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Our Services</h6>
                <h2 class="mb-4 section-title text-white">Awesome mover packer Services For You</h2>
                <p class="text-white">Himachal Mover Packer is a relocation and storage services company, serving within and outside India. We provide home shifting, office relocation, packers and movers, vehicle transportation, warehousing, and logistics services to the companies and families all over the world.</p>
                <a href="" class="btn btn-primary mt-3 py-2 px-4">More Services</a>
            </div>
            <div class="col-lg-6 pt-5 pt-lg-0">
                <div class="owl-carousel service-carousel position-relative">
                    <div class="d-flex flex-column align-items-center text-center bg-white rounded overflow-hidden pt-4">
                        <div class="icon-box bg-light text-secondary shadow mt-2 mb-4">
                            <i class="fa-solid fa-house"></i>
                        </div>
                        <h5 class="font-weight-bold mb-4 px-4">Household Shifting</h5>
                        <img src="img/blog-1.jpg" alt="">
                    </div>
                    <div class="d-flex flex-column align-items-center text-center bg-white rounded overflow-hidden pt-4">
                        <div class="icon-box bg-light text-secondary shadow mt-2 mb-4">
                            <i class="fa-solid fa-car"></i>
                        </div>
                        <h5 class="font-weight-bold mb-4 px-4">Vehicle Trans...</h5>
                        <img src="img/transportation.jfif" alt="">
                    </div>
                    <div class="d-flex flex-column align-items-center text-center bg-white rounded overflow-hidden pt-4">
                        <div class="icon-box bg-light text-secondary shadow mt-2 mb-4">
                            <i class="fa-solid fa-briefcase"></i>
                        </div>
                        <h5 class="font-weight-bold mb-4 px-4">Office Shifting</h5>
                        <img src="img/office-shifting.jpg" alt="">
                    </div>
                    <div class="d-flex flex-column align-items-center text-center bg-white rounded overflow-hidden pt-4">
                        <div class="icon-box bg-light text-secondary shadow mt-2 mb-4">
                            <i class="fa-solid fa-house-chimney-window"></i>
                        </div>
                        <h5 class="font-weight-bold mb-4 px-4">Warehousing</h5>
                        <img src="img/WAREHOUSING.png" alt="">
                    </div>
                    <div class="d-flex flex-column align-items-center text-center bg-white rounded overflow-hidden pt-4">
                        <div class="icon-box bg-light text-secondary shadow mt-2 mb-4">
                            <i class="fa-solid fa-truck-moving"></i>
                        </div>
                        <h5 class="font-weight-bold mb-4 px-4">International Mov..</h5>
                        <img src="img/INTERNATIONAL MOVING.jpg" alt="">
                    </div>
                    <div class="d-flex flex-column align-items-center text-center bg-white rounded overflow-hidden pt-4">
                        <div class="icon-box bg-light text-secondary shadow mt-2 mb-4">
                            <i class="fa-solid fa-truck-moving"></i>
                        </div>
                        <h5 class="font-weight-bold mb-4 px-4">Domestic Moving</h5>
                        <img src="img/download (2).jfif" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->


<!-- Features Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-7 pt-lg-5 pb-3">
                <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Why Choose Us</h6>
                <h1 class="mb-4 section-title">25 Years Experience In Mover Packer </h1>
                <p class="mb-4">Himachal Mover Packer 25 Years Experience is a well-established packing and moving company in India, providing home shifting, office shifting, domestic and international relocation and car transportation services. We are renowned for providing quality and superior packing and moving services in India as well as to global countries at the most economical rates. Inspired by our aim of being a leading name in the packers and movers industry.</p>
                <div class="row">
                    <div class="col-sm-4">
                        <h1 class="text-secondary mb-2" data-toggle="counter-up">225</h1>
                        <h6 class="font-weight-semi-bold mb-sm-4">Our Cleaners</h6>
                    </div>
                    <div class="col-sm-4">
                        <h1 class="text-secondary mb-2" data-toggle="counter-up">1050</h1>
                        <h6 class="font-weight-semi-bold mb-sm-4">Happy Clients</h6>
                    </div>
                    <div class="col-sm-4">
                        <h1 class="text-secondary mb-2" data-toggle="counter-up">2500</h1>
                        <h6 class="font-weight-semi-bold mb-sm-4">Projects Done</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-5" style="min-height: 400px;">
                <div class="position-relative h-100 rounded overflow-hidden">
                    <img class="position-absolute w-100 h-100" src="img/abouta.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->








<!-- Testimonial Start -->
<div class="container-fluid bg-testimonial py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-7 pt-lg-5 pb-5">
                <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Testimonial</h6>
                <h1 class="section-title text-white mb-5">What Our Clients Say</h1>
                <div class="owl-carousel testimonial-carousel position-relative">
                    <div class="d-flex flex-column text-white">
                        <div class="d-flex align-items-center mb-3">
                            <img class="img-fluid" src="img/testimonial-1.jpg" alt="">
                            <div class="ml-3">
                                <h5 class="text-primary">Mr.Donald</h5>
                                <i>Developer</i>
                            </div>
                        </div>
                        <p>"Himachal Mover Packer are great when it comes to relocation. They are prompt, right from the survey of goods to packing, loading, unloading, moving and re-arranging of goods in your new home. Balaji National Packers and Movers done good job”</p>
                    </div>
                    <div class="d-flex flex-column text-white">
                        <div class="d-flex align-items-center mb-3">
                            <img class="img-fluid" src="img/testimonial-2.jpg" alt="">
                            <div class="ml-3">
                                <h5 class="text-primary">Mr.Abhinav</h5>
                                <i>Technician</i>
                            </div>
                        </div>
                        <p>"Himachal Mover Packer are great when it comes to relocation. They are prompt, right from the survey of goods to packing, loading, unloading, moving and re-arranging of goods in your new home. Balaji National Packers and Movers done good job”</p>
                    </div>
                    <div class="d-flex flex-column text-white">
                        <div class="d-flex align-items-center mb-3">
                            <img class="img-fluid" src="img/testimonial-3.jpg" alt="">
                            <div class="ml-3">
                                <h5 class="text-primary">Mr.Bean</h5>
                                <i>Doctor</i>
                            </div>
                        </div>
                        <p>"Himachal Mover Packer are great when it comes to relocation. They are prompt, right from the survey of goods to packing, loading, unloading, moving and re-arranging of goods in your new home. Balaji National Packers and Movers done good job”</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5" style="min-height: 400px;">
                <div class="position-relative h-100 rounded overflow-hidden">
                    <img class="position-absolute w-100 h-100" src="img/testia.webp" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->
<!-- Contact Start -->
<div id="contactus" class="container-fluid py-5">
    <div class="container">
        <div class="row align-items-end mb-4">
            <div class="col-lg-6">
                <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Contact Us</h6>
                <h1 class="section-title mb-3">Contact Us For Mover Packer</h1>
            </div>
            <div class="col-lg-6">

            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 mb-5 mb-lg-0">
                <div class="contact-form">

                    <x-forms.contact-form />
                </div>
            </div>
            <div class="col-lg-5" style="min-height: 400px;">
                <div class="position-relative h-100 rounded overflow-hidden">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3394.291206689537!2d76.92622801448809!3d31.707939345029846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3904e224a076f855%3A0xd978f02b5aadedb5!2s1%2C%203%2C%20Palace%20Colony%20Rd%2C%20Palace%20Colony%2C%20Mandi%2C%20Himachal%20Pradesh%20175001%2C%20India!5e0!3m2!1sen!2snp!4v1654237737548!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->


<!-- Footer Start -->
<div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
    <div class="row pt-5">
        <div class="col-lg-3 col-md-6 mb-5">
            <a href="index.html" class="navbar-brand">
                <h1 class="m-0 mt-n3 display-4 text-primary">Packer</h1>
            </a>
            <p>Himachal Mover Packer is a relocation and storage services company, serving within and outside India. We provide home shifting, office relocation, packers and movers, vehicle transportation, warehousing, and logistics services to the companies and families all over the world.</p>

        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="font-weight-semi-bold text-primary mb-4">Get In Touch</h4>
            <p><i class="fa fa-map-marker-alt text-primary mr-2"></i>1/3, Palace Colony, Mandi, H.P.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - 175001</p>
            <p><i class="fa fa-phone-alt text-primary mr-2"></i>+91-9569788001, <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+91-9915716984</p>
            <p><i class="fa fa-envelope text-primary mr-2"></i>info@himachalmoversandpackers.com</p>
            <div class="d-flex justify-content-start mt-4">
                <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="font-weight-semi-bold text-primary mb-4">Quick Links</h4>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Services</a>

                <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="font-weight-semi-bold text-primary mb-4">Newsletter</h4>
            <p>Himachal Mover Packer is a well-established packing and moving company in India, providing home shifting, office shifting, domestic and international relocation and car transportation services.</p>
            <div class="w-100">
                <x-forms.newsletter-form />
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: #3E3E4E !important;">
    <div class="row">
        <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
            <p class="m-0 text-white"> All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 text-center text-md-right">
            <ul class="nav d-inline-flex">
                <li class="nav-item">
                    <a class="nav-link text-white py-0" href="#">Privacy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white py-0" href="#">Terms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white py-0" href="#">FAQs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white py-0" href="#">Help</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
<script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modala) {
            modal.style.display = "none";
        }
    }
</script>
</body>

</html>
