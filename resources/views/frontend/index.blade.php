@push('frontend-css')
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
@endpush
@extends('frontend.layout.main')
@section('frontend-container')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100 slider-img" src="{{ asset('frontend/img/slider/S1.jpg') }}" alt="Image">
                    {{-- <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-2 text-light mb-5 animated slideInDown">Learn To Drive With Confidence</h1>
                                    <a href="" class="btn btn-primary py-sm-3 px-sm-5">Learn More</a>
                                    <a href="" class="btn btn-light py-sm-3 px-sm-5 ms-3">Our Courses</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="carousel-item">
                    <img class="w-100 slider-img" src="{{ asset('frontend/img/slider/S2.jpg') }}" alt="Image">
                    {{-- <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-2 text-light mb-5 animated slideInDown">Safe Marwari College, Ranchig Is Our Top Priority</h1>
                                    <a href="" class="btn btn-primary py-sm-3 px-sm-5">Learn More</a>
                                    <a href="" class="btn btn-light py-sm-3 px-sm-5 ms-3">Our Courses</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="carousel-item">
                    <img class="w-100 slider-img" src="{{ asset('frontend/img/slider/S3.jpg') }}" alt="Image">
                </div>
                <div class="carousel-item">
                    <img class="w-100 slider-img" src="{{ asset('frontend/img/slider/S4.jpg') }}" alt="Image">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Start Quick Links -->

    <div class="container-fluid py-4 my-4">
        <div class="row">
            <div class="col-md-12">
                <div class="dashboard-wrapper">

                    <a href="#" class="dashboard-link">
                        <div class="dashboard-card border-blue">
                            <img src="{{ asset('frontend/img/icon/placement.png') }}" alt="Placement">
                            <h6 class="text-primary">Placement & Training Cell</h6>
                        </div>
                    </a>

                    <a href="#" class="dashboard-link">
                        <div class="dashboard-card border-green">
                            <img src="{{ asset('frontend/img/icon/pay-fee.png') }}" alt="Pay Fee">
                            <h6 class="text-success">Pay Fee</h6>
                        </div>
                    </a>

                    <a href="#" class="dashboard-link">
                        <div class="dashboard-card border-red">
                            <img src="{{ asset('frontend/img/icon/admission.png') }}" alt="Admission">
                            <h6 class="text-success">Admission</h6>
                        </div>
                    </a>

                    <a href="#" class="dashboard-link">
                        <div class="dashboard-card border-orange">
                            <img src="{{ asset('frontend/img/icon/exam.png') }}" alt="Examination">
                            <h6 class="text-warning">Examination</h6>
                        </div>
                    </a>

                    <a href="#" class="dashboard-link">
                        <div class="dashboard-card border-blue">
                            <img src="{{ asset('frontend/img/icon/clc.png') }}" alt="CLC">
                            <h6 class="text-primary">Apply CLC (Only Voc.)</h6>
                        </div>
                    </a>

                    <a href="#" class="dashboard-link">
                        <div class="dashboard-card border-red">
                            <img src="{{ asset('frontend/img/icon/result.png') }}" alt="Results">
                            <h6 class="text-danger">Results</h6>
                        </div>
                    </a>

                </div>
            </div>
        </div>

    </div>

    <!-- End Quick Links -->

    {{-- ================================ --}}
    <!-- About & Adminstration Section -->
    {{-- ================================ --}}
    <div class="container-fluid my-4 py-4">
        <div class="row align-items-stretch">

            <!-- LEFT COLUMN - ABOUT COLLEGE -->
            <div class="col-md-6 mb-3 d-flex">
                <div class="about-box p-4 w-100 h-100 d-flex flex-column">
                    <h3 class="text-center">About Us</h3>

                    <p class="text-justify text-dark flex-grow-1">
                        Marwari College, Ranchi
                        was established in the year 1963 by the Marwari Shiksha Trust to facilitate
                        higher education for the young and promising students of society, specially
                        the tribes and downtrodden. This premier college of Jharkhand State came into
                        existence with sincere and incessant efforts of Late Ganga Prasad Budhia.
                        The first President of Marwari College Governing Body was Late Ganga Prasad Budhia.
                        The college started with 30 students of Pre-University classes, 76 students of
                        B.Com. and 64 students of B.A. in evening session...
                    </p>

                    <div class="text-center mt-auto">
                        <a href="#" class="btn btn-sm btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN - Our Administration -->
            <div class="col-md-6 mb-3 d-flex">
                <div class="admin-box p-4 w-100 h-100">

                    <h3 class="text-center mb-3">Our Administration</h3>

                    <div class="swiper admin-slider">
                        <div class="swiper-wrapper">

                            <!-- Admin 1 -->
                            <div class="swiper-slide">
                                <div class="admin-card">
                                    <img src="{{ asset('frontend/img/administration/admin1.jpg') }}">
                                    <h6>Dr. A. K. Singh</h6>
                                    <span>Principal</span>
                                </div>
                            </div>

                            <!-- Admin 2 -->
                            <div class="swiper-slide">
                                <div class="admin-card">
                                    <img src="{{ asset('frontend/img/administration/admin2.jpg') }}">
                                    <h6>Prof. R. Verma</h6>
                                    <span>Vice Principal</span>
                                </div>
                            </div>

                            <!-- Admin 3 -->
                            <div class="swiper-slide">
                                <div class="admin-card">
                                    <img src="{{ asset('frontend/img/administration/admin3.jpg') }}">
                                    <h6>Dr. S. Kumar</h6>
                                    <span>Registrar</span>
                                </div>
                            </div>

                            <!-- Admin 4 -->
                            <div class="swiper-slide">
                                <div class="admin-card">
                                    <img src="{{ asset('frontend/img/administration/admin4.jpg') }}">
                                    <h6>Prof. P. Sharma</h6>
                                    <span>Controller of Exams</span>
                                </div>
                            </div>

                            <!-- Admin 5 -->
                            <div class="swiper-slide">
                                <div class="admin-card">
                                    <img src="{{ asset('frontend/img/administration/admin5.jpg') }}">
                                    <h6>Dr. M. Gupta</h6>
                                    <span>Dean</span>
                                </div>
                            </div>

                            <!-- Admin 6 -->
                            <div class="swiper-slide">
                                <div class="admin-card">
                                    <img src="{{ asset('frontend/img/administration/admin6.jpg') }}">
                                    <h6>Mr. R. Das</h6>
                                    <span>Finance Officer</span>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>



        </div>
    </div>
    {{-- ================================ --}}

    {{-- ===================================== --}}
    <!-- Announcement & Important Notices -->
    {{-- ===================================== --}}
    <div class="container-fluid my-4">
        <div class="row py-4">

            {{-- Important Notice --}}
            <div class="col-md-6 d-flex">
                <div class="admission-box w-100 d-flex flex-column">

                    <div class="admission-header">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i>
                        Important Notice
                    </div>

                    <div class="admission-body flex-grow-1">
                        <p class="notice-warning">
                            कृपया ध्यान दें: एडमिशन रद्द कर दिया जायेगा।
                        </p>

                        <p class="notice-info">
                            👉 Click Here For Admission Details.
                            <a href="#">Click Here</a>
                        </p>

                        <p class="notice-info">
                            Commerce / Economics / Psychology / Philosophy / Khortha / Urdu /
                            Kurmali / Sanskrit / Mundari / Hindi (Girls Section) में
                            पहले आओ पहले पाओ के आधार पर डायरेक्ट एडमिशन।
                            <a href="#">Click Here</a>
                        </p>

                        <p class="notice-success">
                            Documents भेजने हेतु सभी विषयों के अलग-अलग Google Form Link दिए गए हैं।
                            <a href="#">Upload Documents</a>
                        </p>
                    </div>

                </div>
            </div>

            {{-- ======================= --}}
            <!-- ANNOUNCEMENT -->
            <div class="col-md-6 d-flex">
                <div class="card w-100 d-flex flex-column">

                    <div class="announcement-header">
                        <i class="bi bi-megaphone-fill me-2"></i>
                        Announcements
                    </div>

                    <div class="card-body flex-grow-1">
                        <!-- tabs + notice list unchanged -->

                        <ul class="nav nav-tabs notice-tabs">
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#latest">Latest
                                    News</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#exam">Examination</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab"
                                    data-bs-target="#placement">Placement</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#event">Events</button>
                            </li>
                        </ul>

                        <div class="tab-content mt-2">
                            <div class="tab-pane fade show active" id="latest">
                                <div class="notice-list">

                                    <a href="#" class="notice-item">
                                        <div class="notice-date">
                                            <span class="dm">05 JAN</span>
                                            <span class="year">2025</span>
                                        </div>
                                        <div class="notice-text">
                                            Examination Form U.G NEP Sem-IV
                                            <span class="badge-new">NEW</span>
                                        </div>
                                    </a>

                                    <a href="#" class="notice-item">
                                        <div class="notice-date">
                                            <span class="dm">04 JAN</span>
                                            <span class="year">2025</span>
                                        </div>
                                        <div class="notice-text">
                                            End Semester Examination Programme
                                            <span class="badge-new">NEW</span>
                                        </div>
                                    </a>

                                    <a href="#" class="notice-item">
                                        <div class="notice-date">
                                            <span class="dm">14 NOV</span>
                                            <span class="year">2024</span>
                                        </div>
                                        <div class="notice-text">
                                            Notice for CBCS & NEP Students
                                        </div>
                                    </a>

                                </div>
                                <div class="view-all-wrapper text-end mt-2">
                                    <a href="#" class="btn btn-sm btn-view-all">
                                        View All Notices →
                                    </a>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="exam">

                                <a href="#" class="notice-item">
                                    <div class="notice-date">
                                        <span class="dm">04 JAN</span>
                                        <span class="year">2025</span>
                                    </div>
                                    <div class="notice-text">
                                        End Semester Examination Programme
                                        <span class="badge-new">NEW</span>
                                    </div>
                                </a>

                                <a href="#" class="notice-item">
                                    <div class="notice-date">
                                        <span class="dm">14 NOV</span>
                                        <span class="year">2024</span>
                                    </div>
                                    <div class="notice-text">
                                        Notice for CBCS & NEP Students
                                    </div>
                                </a>
                            </div>

                            <div class="tab-pane fade" id="placement">
                                <a href="#" class="notice-item">
                                    <div class="notice-date">
                                        <span class="dm">04 JAN</span>
                                        <span class="year">2025</span>
                                    </div>
                                    <div class="notice-text">
                                        End Semester Examination Programme
                                        <span class="badge-new">NEW</span>
                                    </div>
                                </a>

                                <a href="#" class="notice-item">
                                    <div class="notice-date">
                                        <span class="dm">14 NOV</span>
                                        <span class="year">2024</span>
                                    </div>
                                    <div class="notice-text">
                                        Notice for CBCS & NEP Students
                                    </div>
                                </a>
                            </div>

                            <div class="tab-pane fade" id="event">
                                <a href="#" class="notice-item">
                                    <div class="notice-date">
                                        <span class="dm">04 JAN</span>
                                        <span class="year">2025</span>
                                    </div>
                                    <div class="notice-text">
                                        End Semester Examination Programme
                                        <span class="badge-new">NEW</span>
                                    </div>
                                </a>

                                <a href="#" class="notice-item">
                                    <div class="notice-date">
                                        <span class="dm">14 NOV</span>
                                        <span class="year">2024</span>
                                    </div>
                                    <div class="notice-text">
                                        Notice for CBCS & NEP Students
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <!-- Departments Start -->
    <div class="container-xxl courses my-3 py-4 pb-0">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Our</h6>
                <h1 class="display-6 mb-4">Departments</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10">
                    <a href="#" class="department-box">
                        <div class="dept-icon">
                            <i class="bi bi-bank2"></i>
                        </div>
                        <h5>Humanities</h5>
                        <span>Arts & Social Sciences</span>
                    </a>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10">
                    <a href="#" class="department-box">
                        <div class="dept-icon">
                            <i class="bi bi-beaker"></i>
                        </div>
                        <h5>Science</h5>
                        <span>Physics, Chemistry, Biology</span>
                    </a>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10">
                    <a href="#" class="department-box">
                        <div class="dept-icon">
                            <i class="bi bi-briefcase-fill"></i>
                        </div>
                        <h5>Commerce</h5>
                        <span>Accounting & Management</span>
                    </a>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10">
                    <a href="#" class="department-box">
                        <div class="dept-icon">
                            <i class="bi bi-tools"></i>
                        </div>
                        <h5>Vocational</h5>
                        <span>Skill Based Programs</span>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!-- Department End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Testimonial</h6>
                <h1 class="display-6 mb-4">What Our Students Say!</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="owl-carousel testimonial-carousel">

                        <!-- Testimonial 1 -->
                        <div class="testimonial-item text-center">
                            <p class="fs-4">
                                Marwari College, Ranchi has given me not only quality education but also confidence to face
                                the real world.
                                The supportive teachers and disciplined environment helped me grow academically and
                                personally.
                            </p>
                            <hr class="w-25 mx-auto">
                            <h5>Ankit Kumar</h5>
                            <span>B.Com Student</span>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="testimonial-item text-center">
                            <p class="fs-4">
                                Being a student from a tribal background, Marwari College provided me equal opportunities
                                and encouragement.
                                The college truly works for the upliftment of students from all sections of society.
                            </p>
                            <hr class="w-25 mx-auto">
                            <h5>Sarita Toppo</h5>
                            <span>B.A. Student</span>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="testimonial-item text-center">
                            <p class="fs-4">
                                The academic atmosphere at Marwari College is excellent.
                                Regular classes, experienced faculty, and a strong focus on discipline make it one of the
                                best colleges in Jharkhand.
                            </p>
                            <hr class="w-25 mx-auto">
                            <h5>Rohit Verma</h5>
                            <span>B.Sc Student</span>
                        </div>

                        <!-- Testimonial 4 -->
                        <div class="testimonial-item text-center">
                            <p class="fs-4">
                                Marwari College has a proud legacy since 1963, and being part of such an institution is an
                                honor.
                                The college motivates students to aim higher and stay committed to their goals.
                            </p>
                            <hr class="w-25 mx-auto">
                            <h5>Pooja Agarwal</h5>
                            <span>B.Com (Honours)</span>
                        </div>

                        <!-- Testimonial 5 -->
                        <div class="testimonial-item text-center">
                            <p class="fs-4">
                                From academic guidance to personal mentoring, Marwari College has always supported me.
                                I am grateful to the faculty for shaping my career and values with dedication.
                            </p>
                            <hr class="w-25 mx-auto">
                            <h5>Manish Singh</h5>
                            <span>Alumni</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    {{-- Important Website --}}
    <div class="container-fluid my-5">
        <h2 class="text-center fw-bold mb-4" style="padding-bottom:50px;">Important Websites</h2>

        <div class="swiper important-websites-slider">
            <div class="swiper-wrapper text-center">

                <!-- Logo 1 -->
                <div class="swiper-slide">
                    <a href="https://www.education.gov.in" target="_blank">
                        <img src="{{ asset('frontend/img/important-website/imp1.png') }}" alt="Ministry of Education">
                    </a>
                </div>

                <!-- Logo 2 -->
                <div class="swiper-slide">
                    <a href="https://www.ugc.gov.in" target="_blank">
                        <img src="{{ asset('frontend/img/important-website/imp2.png') }}" alt="UGC">
                    </a>
                </div>

                <!-- Logo 3 -->
                <div class="swiper-slide">
                    <a href="https://www.naac.gov.in" target="_blank">
                        <img src="{{ asset('frontend/img/important-website/imp3.png') }}" alt="NAAC">
                    </a>
                </div>

                <!-- Logo 4 -->
                <div class="swiper-slide">
                    <a href="https://www.onos.gov.in" target="_blank">
                        <img src="{{ asset('frontend/img/important-website/imp4.png') }}" alt="ONOS">
                    </a>
                </div>

                <!-- Logo 5 -->
                <div class="swiper-slide">
                    <a href="https://aishe.gov.in" target="_blank">
                        <img src="{{ asset('frontend/img/important-website/imp5.png') }}" alt="AISHE">
                    </a>
                </div>

                <!-- Logo 6 -->
                <div class="swiper-slide">
                    <a href="https://www.nrf.gov.in" target="_blank">
                        <img src="{{ asset('frontend/img/important-website/imp6.png') }}" alt="NRF">
                    </a>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('frontend-js')
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // ===========Important Website Slider================
        const swiper = new Swiper('.important-websites-slider', {
            loop: true,
            speed: 700,
            slidesPerView: 5,
            slidesPerGroup: 1,
            spaceBetween: 30, // 👈 spacing BETWEEN logos (safe way)
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true
            },
            breakpoints: {
                0: {
                    slidesPerView: 3,
                    spaceBetween: 15
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 20
                },
                1200: {
                    slidesPerView: 5,
                    spaceBetween: 30
                }
            }
        });

        // =======Our Administration Slider===================
        new Swiper('.admin-slider', {
            loop: true,
            speed: 700,
            slidesPerGroup: 1,
            spaceBetween: 20,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true
            },
            navigation: {
                nextEl: '.admin-next',
                prevEl: '.admin-prev',
            },
            breakpoints: {
                0: {
                    slidesPerView: 1
                },
                768: {
                    slidesPerView: 2
                },
                1200: {
                    slidesPerView: 3
                }
            }
        });
    </script>


    {{--  --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const noticeList = document.getElementById("noticeList");
            const inner = noticeList.querySelector(".notice-inner");

            // Clone content for infinite loop
            inner.innerHTML += inner.innerHTML;

            let scrollSpeed = 0.5; // smaller = smoother
            let position = 0;
            let isPaused = false;

            function scrollNotice() {
                if (!isPaused) {
                    position += scrollSpeed;
                    if (position >= inner.scrollHeight / 2) {
                        position = 0;
                    }
                    noticeList.scrollTop = position;
                }
                requestAnimationFrame(scrollNotice);
            }

            // Pause on hover
            noticeList.addEventListener("mouseenter", () => isPaused = true);
            noticeList.addEventListener("mouseleave", () => isPaused = false);

            scrollNotice();
        });
    </script>
@endpush
