<!-- Desktop College Header -->
<div class="college-header d-none d-lg-block">
    <div class="container-fluid px-5">
        <div class="row align-items-center">

            <!-- Logo -->
            <div class="col-lg-2 text-center">
                <img src="{{ asset('logo-light.png') }}" alt="Marwari College Ranchi" class="college-logo">
            </div>

            <!-- College Info -->
            <div class="col-lg-10">
                <h1 class="college-title">MARWARI COLLEGE, RANCHI</h1>
                <div class="divider"></div>
                <h4 class="college-subtitle">
                    NAAC Accredited Autonomous College with Potential for Excellence
                </h4>
                <p class="college-under">Under Ranchi University</p>
            </div>

        </div>
    </div>
</div>


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top"
    style="border-bottom: 3px solid var(--secondary);">

    <!-- Mobile & Tablet Header (ONE LINE) -->
    <div class="container-fluid d-lg-none">
        <div class="row align-items-center w-100">

            <!-- Logo -->
            <div class="col-2 text-start">
                <a class="navbar-brand m-0" href="{{ url('/') }}">
                    <img src="{{ asset('logo-light.png') }}" alt="Logo" width="55" height="55">
                </a>
            </div>

            <!-- College Info -->
            <div class="col-8 text-center">
                <h6 class="mb-0 fw-bold">Marwari College, Ranchi</h6>
                <small class="d-block">NAAC Accredited Autonomous</small>
            </div>

            <!-- Toggler -->
            <div class="col-2 text-end">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

        </div>
    </div>

    <div class="collapse navbar-collapse" id="navbarCollapse">

        <!-- Centered Menu -->
        <div class="d-flex justify-content-center flex-grow-1">
            <div class="navbar-nav p-4 p-lg-0 text-center text-lg-start">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        About
                    </a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="#" class="dropdown-item">About College</a>
                        <a href="#" class="dropdown-item">Mission & Vision</a>
                        <a href="#" class="dropdown-item">Committee & Cell</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        Administration
                    </a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="feature.html" class="dropdown-item">College Administration</a>
                        <a href="appointment.html" class="dropdown-item">University</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        Staff
                    </a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="#" class="dropdown-item">Teaching Staff</a>
                        <a href="#" class="dropdown-item">Non-Teaching Staff</a>
                    </div>
                </div>
                <div class="nav-item dropdown dropdown-mega">

                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        Departments
                    </a>

                    <div class="dropdown-menu mega-menu p-4 bg-light">
                        <div class="row g-4">

                            <!-- Humanities -->
                            <div class="col-lg-3">
                                <h6 class="mega-title">Humanities</h6>
                                <a class="dropdown-item" href="#">Hindi</a>
                                <a class="dropdown-item" href="#">English</a>
                                <a class="dropdown-item" href="#">History</a>
                                <a class="dropdown-item" href="#">Political Science</a>
                                <a class="dropdown-item" href="#">Philosophy</a>
                            </div>

                            <!-- Science -->
                            <div class="col-lg-3">
                                <h6 class="mega-title">Science</h6>
                                <a class="dropdown-item" href="#">Physics</a>
                                <a class="dropdown-item" href="#">Chemistry</a>
                                <a class="dropdown-item" href="#">Mathematics</a>
                                <a class="dropdown-item" href="#">Botany</a>
                                <a class="dropdown-item" href="#">Zoology</a>
                            </div>

                            <!-- Commerce -->
                            <div class="col-lg-3">
                                <h6 class="mega-title">Commerce</h6>
                                <a class="dropdown-item" href="#">Commerce</a>
                                <a class="dropdown-item" href="#">Accounting</a>
                                <a class="dropdown-item" href="#">Business Administration</a>
                            </div>

                            <!-- Vocational -->
                            <div class="col-lg-3">
                                <h6 class="mega-title">Vocational</h6>
                                <a class="dropdown-item" href="#">BCA</a>
                                <a class="dropdown-item" href="#">BBA</a>
                                <a class="dropdown-item" href="#">Information Technology</a>
                            </div>

                        </div>
                    </div>
                </div>
                <a href="#" class="nav-item nav-link">IQAC</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        NAAC
                    </a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="#" class="dropdown-item">NIRF</a>
                        <a href="#" class="dropdown-item">AISHE</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        Gallery
                    </a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="#" class="dropdown-item">Photo Gallery</a>
                        <a href="#" class="dropdown-item">Video Gallery</a>
                        <a href="#" class="dropdown-item">Media</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        Co-curricular
                    </a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="#" class="dropdown-item">Cultural</a>
                        <a href="#" class="dropdown-item">NSS</a>
                        <a href="#" class="dropdown-item">NCC</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        Student Portal
                    </a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="feature.html" class="dropdown-item">Features</a>
                        <a href="appointment.html" class="dropdown-item">Appointment</a>
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>

                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
        </div>


        <!-- Menu Button (Right aligned, desktop only) -->
        <div class="d-none d-lg-flex align-items-center">
            <a href="{{ route('login') }}" class="btn menu-btn">
                Admission <i class="fa fa-arrow-right ms-2"></i>
            </a>
        </div>


    </div>


</nav>
<!-- Navbar End -->
