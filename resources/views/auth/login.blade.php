<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login || Marwari College Ranchi</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/images/favicon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('backend/vendors/css/vendors.min.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/theme.min.css') }}">
</head>

<body>

<main class="auth-minimal-wrapper">
    <div class="auth-minimal-inner">
        <div class="minimal-card-wrapper">

            <div class="d-flex justify-content-center mb-5">
                <div class="d-flex flex-column flex-md-row align-items-center text-center text-md-start">

                    <a href="{{ url('/') }}" class="me-md-3 mb-2 mb-md-0">
                        <img src="{{ asset('backend/images/marwari-logo.png') }}"
                            class="img-fluid"
                            style="height: 100px;"
                            alt="Marwari College Ranchi">
                    </a>

                    <div>
                        <h2 class="fw-bold mb-1">Marwari College Ranchi</h2>
                        <h6 class="text-muted mb-0">NAAC Accredited, Autonomous College</h6>
                    </div>

                </div>
            </div>


            <!-- Login Card -->
            <div class="card mb-4 mt-5 mx-4 mx-sm-0 position-relative">
                <div class="wd-50 bg-white p-2 rounded-circle shadow position-absolute top-0 start-50 translate-middle">
                    <img src="{{ asset('backend/images/admin-logo.png') }}" class="img-fluid" alt="Admin">
                </div>

                <div class="card-body p-sm-5">
                    <h2 class="fs-20 fw-bold text-center mb-4">Login</h2>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-4">
                            <input type="email"
                                   name="email"
                                   class="form-control"
                                   placeholder="Email address"
                                   value="{{ old('email') }}"
                                   >
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="password"
                                   name="password"
                                   class="form-control"
                                   placeholder="Password">
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input type="checkbox" name="remember" class="form-check-input" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Remember Me</label>
                            </div>
                            <a href="#" class="fs-13 text-primary">Forgot password?</a>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg w-100">
                            Login
                        </button>
                    </form>
                </div>
            </div>

            <!-- Footer -->
            <footer class="text-center mt-4 text-muted fs-13">
                <p class="mb-1">
                    © {{ date('Y') }} Marwari College Ranchi. All rights reserved.
                </p>
                <p class="mb-0">
                    Designed & Developed by IT Cell
                </p>
            </footer>

        </div>
    </div>
</main>

<!-- JS -->
<script src="{{ asset('backend/vendors/js/vendors.min.js') }}"></script>
<script src="{{ asset('backend/js/common-init.min.js') }}"></script>

</body>
</html>
