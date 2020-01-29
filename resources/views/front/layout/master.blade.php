<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta')
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('front/img/favicon.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('front/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    @yield('stylesheet')
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
   @include('front.includes.header')
    <!-- header-end -->

    <!-- slider_area_start -->
    @include('front.includes.slider')
    <!-- slider_area_end -->

    <!-- catagory_area -->
    <div class="catagory_area">
        <div class="container">
            <div class="row cat_search">
                <div class="col-lg-3 col-md-4">
                    <div class="single_input">
                        <input type="text" placeholder="Search keyword">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="single_input">
                        <select class="wide" >
                            <option data-display="Location">Location</option>
                            <option value="1">Dhaka</option>
                            <option value="2">Rangpur</option>
                            <option value="4">Sylet</option>
                          </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="single_input">
                        <select class="wide">
                            <option data-display="Category">Category</option>
                            <option value="1">Category 1</option>
                            <option value="2">Category 2</option>
                            <option value="4">Category 3</option>
                          </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="job_btn">
                        <a href="#" class="boxed-btn3">Find Job</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="popular_search d-flex align-items-center">
                        <span>Popular Search:</span>
                        <ul>
                            <li><a href="#">Design & Creative</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">Administration</a></li>
                            <li><a href="#">Teaching & Education</a></li>
                            <li><a href="#">Engineering</a></li>
                            <li><a href="#">Software & Web</a></li>
                            <li><a href="#">Telemarketing</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ catagory_area -->

    <!-- popular_catagory_area_start  -->
    <div class="popular_catagory_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title mb-40">
                        <h3>Popolar Categories</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_catagory">
                        <a href="jobs.html"><h4>Design & Creative</h4></a>
                        <p> <span>50</span> Available position</p>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_catagory">
                        <a href="jobs.html"><h4>Marketing</h4></a>
                        <p> <span>50</span> Available position</p>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_catagory">
                        <a href="jobs.html"><h4>Telemarketing</h4></a>
                        <p> <span>50</span> Available position</p>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_catagory">
                        <a href="jobs.html"><h4>Software & Web</h4></a>
                        <p> <span>50</span> Available position</p>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_catagory">
                        <a href="jobs.html"><h4>Administration</h4></a>
                        <p> <span>50</span> Available position</p>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_catagory">
                        <a href="jobs.html"><h4>Teaching & Education</h4></a>
                        <p> <span>50</span> Available position</p>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_catagory">
                        <a href="jobs.html"><h4>Engineering</h4></a>
                        <p> <span>50</span> Available position</p>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_catagory">
                        <a href="jobs.html"><h4>Garments / Textile</h4></a>
                        <p> <span>50</span> Available position</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- popular_catagory_area_end  -->

    <!-- job_listing_area_start  -->
    <div class="job_listing_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section_title">
                        <h3>Job Listing</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="brouse_job text-right">
                        <a href="jobs.html" class="boxed-btn4">Browse More Job</a>
                    </div>
                </div>
            </div>
            <div class="job_lists">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/svg_icon/1.svg" alt="">
                                </div>
                                <div class="jobs_conetent">
                                    <a href="job_details.html"><h4>Software Engineer</h4></a>
                                    <div class="links_locat d-flex align-items-center">
                                        <div class="location">
                                            <p> <i class="fa fa-map-marker"></i> California, USA</p>
                                        </div>
                                        <div class="location">
                                            <p> <i class="fa fa-clock-o"></i> Part-time</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="jobs_right">
                                <div class="apply_now">
                                    <a class="heart_mark" href="#"> <i class="ti-heart"></i> </a>
                                    <a href="job_details.html" class="boxed-btn3">Apply Now</a>
                                </div>
                                <div class="date">
                                    <p>Date line: 31 Jan 2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                <div class="thumb">
                                    <img src="{{ asset('front/img/svg_icon/2.svg') }}" alt="">
                                </div>
                                <div class="jobs_conetent">
                                    <a href="job_details.html"><h4>Digital Marketer</h4></a>
                                    <div class="links_locat d-flex align-items-center">
                                        <div class="location">
                                            <p> <i class="fa fa-map-marker"></i> California, USA</p>
                                        </div>
                                        <div class="location">
                                            <p> <i class="fa fa-clock-o"></i> Part-time</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="jobs_right">
                                <div class="apply_now">
                                    <a class="heart_mark" href="#"> <i class="ti-heart"></i> </a>
                                    <a href="job_details.html" class="boxed-btn3">Apply Now</a>
                                </div>
                                <div class="date">
                                    <p>Date line: 31 Jan 2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                <div class="thumb">
                                    <img src="{{ asset('img/svg_icon/3.svg') }}" alt="">
                                </div>
                                <div class="jobs_conetent">
                                    <a href="job_details.html"><h4>Wordpress Developer</h4></a>
                                    <div class="links_locat d-flex align-items-center">
                                        <div class="location">
                                            <p> <i class="fa fa-map-marker"></i> California, USA</p>
                                        </div>
                                        <div class="location">
                                            <p> <i class="fa fa-clock-o"></i> Part-time</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="jobs_right">
                                <div class="apply_now">
                                    <a class="heart_mark" href="#"> <i class="ti-heart"></i> </a>
                                    <a href="job_details.html" class="boxed-btn3">Apply Now</a>
                                </div>
                                <div class="date">
                                    <p>Date line: 31 Jan 2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                <div class="thumb">
                                    <img src="{{ asset('front/img/svg_icon/4.svg') }}" alt="">
                                </div>
                                <div class="jobs_conetent">
                                    <a href="job_details.html"><h4>Visual Designer</h4></a>
                                    <div class="links_locat d-flex align-items-center">
                                        <div class="location">
                                            <p> <i class="fa fa-map-marker"></i> California, USA</p>
                                        </div>
                                        <div class="location">
                                            <p> <i class="fa fa-clock-o"></i> Part-time</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="jobs_right">
                                <div class="apply_now">
                                    <a class="heart_mark" href="#"> <i class="ti-heart"></i> </a>
                                    <a href="job_details.html" class="boxed-btn3">Apply Now</a>
                                </div>
                                <div class="date">
                                    <p>Date line: 31 Jan 2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                <div class="thumb">
                                    <img src="{{ asset('front/img/svg_icon/5.svg') }}" alt="">
                                </div>
                                <div class="jobs_conetent">
                                    <a href="job_details.html"><h4>Software Engineer</h4></a>
                                    <div class="links_locat d-flex align-items-center">
                                        <div class="location">
                                            <p> <i class="fa fa-map-marker"></i> California, USA</p>
                                        </div>
                                        <div class="location">
                                            <p> <i class="fa fa-clock-o"></i> Part-time</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="jobs_right">
                                <div class="apply_now">
                                    <a class="heart_mark" href="#"> <i class="ti-heart"></i> </a>
                                    <a href="job_details.html" class="boxed-btn3">Apply Now</a>
                                </div>
                                <div class="date">
                                    <p>Date line: 31 Jan 2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                <div class="thumb">
                                    <img src="{{ asset('front/img/svg_icon/1.svg') }}" alt="">
                                </div>
                                <div class="jobs_conetent">
                                    <a href="job_details.html"><h4>Creative Designer</h4></a>
                                    <div class="links_locat d-flex align-items-center">
                                        <div class="location">
                                            <p> <i class="fa fa-map-marker"></i> California, USA</p>
                                        </div>
                                        <div class="location">
                                            <p> <i class="fa fa-clock-o"></i> Part-time</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="jobs_right">
                                <div class="apply_now">
                                    <a class="heart_mark" href="#"> <i class="ti-heart"></i> </a>
                                    <a href="job_details.html" class="boxed-btn3">Apply Now</a>
                                </div>
                                <div class="date">
                                    <p>Date line: 31 Jan 2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- job_listing_area_end  -->

    <!-- featured_candidates_area_start  -->
    <div class="featured_candidates_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-40">
                        <h3>Featured Candidates</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="candidate_active owl-carousel">
                        <div class="single_candidates text-center">
                            <div class="thumb">
                                <img src="{{ asset('img/candiateds/1.png') }}" alt="">
                            </div>
                            <a href="#"><h4>Markary Jondon</h4></a>
                            <p>Software Engineer</p>
                        </div>
                        <div class="single_candidates text-center">
                            <div class="thumb">
                                <img src="{{ asset('img/candiateds/2.png') }}" alt="">
                            </div>
                            <a href="#"><h4>Markary Jondon</h4></a>
                            <p>Software Engineer</p>
                        </div>
                        <div class="single_candidates text-center">
                            <div class="thumb">
                                <img src="{{ asset('img/candiateds/3.png') }}" alt="">
                            </div>
                            <a href="#"><h4>Markary Jondon</h4></a>
                            <p>Software Engineer</p>
                        </div>
                        <div class="single_candidates text-center">
                            <div class="thumb">
                                <img src="img/candiateds/4.png" alt="">
                            </div>
                            <a href="#"><h4>Markary Jondon</h4></a>
                            <p>Software Engineer</p>
                        </div>
                        <div class="single_candidates text-center">
                            <div class="thumb">
                                <img src="{{ asset('img/candiateds/5.png') }}" alt="">
                            </div>
                            <a href="#"><h4>Markary Jondon</h4></a>
                            <p>Software Engineer</p>
                        </div>
                        <div class="single_candidates text-center">
                            <div class="thumb">
                                <img src="{{ asset('img/candiateds/6.png') }}" alt="">
                            </div>
                            <a href="#"><h4>Markary Jondon</h4></a>
                            <p>Software Engineer</p>
                        </div>
                        <div class="single_candidates text-center">
                            <div class="thumb">
                                <img src="{{ asset('img/candiateds/7.png') }}" alt="">
                            </div>
                            <a href="#"><h4>Markary Jondon</h4></a>
                            <p>Software Engineer</p>
                        </div>
                        <div class="single_candidates text-center">
                            <div class="thumb">
                                <img src="{{ asset('img/candiateds/8.png') }}" alt="">
                            </div>
                            <a href="#"><h4>Markary Jondon</h4></a>
                            <p>Software Engineer</p>
                        </div>
                        <div class="single_candidates text-center">
                            <div class="thumb">
                                <img src="{{ asset('img/candiateds/9.png') }}" alt="">
                            </div>
                            <a href="#"><h4>Markary Jondon</h4></a>
                            <p>Software Engineer</p>
                        </div>
                        <div class="single_candidates text-center">
                            <div class="thumb">
                                <img src="{{ asset('img/candiateds/9.png') }}" alt="">
                            </div>
                            <a href="#"><h4>Markary Jondon</h4></a>
                            <p>Software Engineer</p>
                        </div>
                        <div class="single_candidates text-center">
                            <div class="thumb">
                                <img src="{{ asset('img/candiateds/10.png') }}" alt="">
                            </div>
                            <a href="#"><h4>Markary Jondon</h4></a>
                            <p>Software Engineer</p>
                        </div>
                        <div class="single_candidates text-center">
                            <div class="thumb">
                                <img src="{{ asset('img/candiateds/3.png') }}" alt="">
                            </div>
                            <a href="#"><h4>Markary Jondon</h4></a>
                            <p>Software Engineer</p>
                        </div>
                        <div class="single_candidates text-center">
                            <div class="thumb">
                                <img src="{{ asset('img/candiateds/4.png') }}" alt="">
                            </div>
                            <a href="#"><h4>Markary Jondon</h4></a>
                            <p>Software Engineer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- featured_candidates_area_end  -->

    <div class="top_companies_area">
        <div class="container">
            <div class="row align-items-center mb-40">
                <div class="col-lg-6 col-md-6">
                    <div class="section_title">
                        <h3>Top Companies</h3>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="brouse_job text-right">
                        <a href="jobs.html" class="boxed-btn4">Browse More Job</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_company">
                        <div class="thumb">
                            <img src="{{ asset('img/svg_icon/5.svg') }}" alt="">
                        </div>
                        <a href="jobs.html"><h3>Snack Studio</h3></a>
                        <p> <span>50</span> Available position</p>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_company">
                        <div class="thumb">
                            <img src="{{ asset('img/svg_icon/4.svg') }}" alt="">
                        </div>
                        <a href="jobs.html"><h3>Snack Studio</h3></a>
                        <p> <span>50</span> Available position</p>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_company">
                        <div class="thumb">
                            <img src="{{ asset('img/svg_icon/3.svg') }}" alt="">
                        </div>
                        <a href="jobs.html"><h3>Snack Studio</h3></a>
                        <p> <span>50</span> Available position</p>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_company">
                        <div class="thumb">
                            <img src="{{ asset('img/svg_icon/1.svg') }}" alt="">
                        </div>
                        <a href="jobs.html"><h3>Snack Studio</h3></a>
                        <p> <span>50</span> Available position</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- job_searcing_wrap  -->
    <div class="job_searcing_wrap overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-1 col-md-6">
                    <div class="searching_text">
                        <h3>Looking for a Job?</h3>
                        <p>We provide online instant cash loans with quick approval </p>
                        <a href="#" class="boxed-btn3">Browse Job</a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-6">
                    <div class="searching_text">
                        <h3>Looking for a Expert?</h3>
                        <p>We provide online instant cash loans with quick approval </p>
                        <a href="#" class="boxed-btn3">Post a Job</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- job_searcing_wrap end  -->

    <!-- testimonial_area  -->
    <div class="testimonial_area  ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-40">
                        <h3>Testimonial</h3>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="single_testmonial d-flex align-items-center">
                                        <div class="thumb">
                                            <img src="{{ asset('img/testmonial/author.png') }}" alt="">
                                            <div class="quote_icon">
                                                <i class="Flaticon flaticon-quote"></i>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering through animal welfare when people might depend on livestock as their only source of income or food.</p>
                                            <span>- Micky Mouse</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="single_testmonial d-flex align-items-center">
                                        <div class="thumb">
                                            <img src="{{ asset('img/testmonial/author.png') }}" alt="">
                                            <div class="quote_icon">
                                                <i class=" Flaticon flaticon-quote"></i>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering through animal welfare when people might depend on livestock as their only source of income or food.</p>
                                            <span>- Micky Mouse</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="single_testmonial d-flex align-items-center">
                                        <div class="thumb">
                                            <img src="{{ asset('img/testmonial/author.png') }}" alt="">
                                            <div class="quote_icon">
                                                <i class="Flaticon flaticon-quote"></i>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering through animal welfare when people might depend on livestock as their only source of income or food.</p>
                                            <span>- Micky Mouse</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /testimonial_area  -->


    <!-- footer start -->
    @include('front.includes.footer')
    <!--/ footer end  -->

    <!-- link that opens popup -->
    <!-- JS here -->
    <script src="{{ asset('front/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('front/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('front/js/popper.min.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('front/js/ajax-form.js') }}"></script>
    <script src="{{ asset('front/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('front/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('front/js/scrollIt.js') }}"></script>
    <script src="{{ asset('front/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('front/js/wow.min.js') }}"></script>
    <script src="{{ asset('front/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('front/js/plugins.js') }}"></script>
    <script src="{{ asset('front/js/gijgo.min.js') }}"></script>



    <!--contact js-->
    <script src="{{ asset('front/js/contact.js') }}"></script>
    <script src="{{ asset('front/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.form.js') }}"></script>
    <script src="{{ asset('front/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('front/js/mail-script.js') }}"></script>


    <script src="{{ asset('front/js/main.js') }}"></script>
    @yield('script')
</body>

</html>