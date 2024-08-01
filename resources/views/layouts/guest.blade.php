{{--
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div>
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</body>

</html> --}}


<!DOCTYPE html>
<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>

    <meta property="og:image" content="https://demopharma.ayaantec.com/public/pharmacy-new.jpg" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="Pharmacy Software solution is built to manage overall pharmacy business activities including medicine management, purchase management, supplier or manufacturers management, stock management, sales management, daily or monthly accounts management. Most importantly follow up the low stock medicine manage purchase from manufacturers, manage the customers and manufacturers due payment. This software is easy to use and manage with easy medicine search, easy invoice creation, pharmacy faster daily operation and date wise details report.">
    <meta name="keywords" content="Complete Pharmacy Software Solutions, web app">
    <meta name="author" content="PIXINVENT">
    <title>Pharmacy</title>
    <link rel="apple-touch-icon" href="{{ asset('auth/login/storage/2024-06-30-6680ea3f1392c.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('auth/login/storage/2024-06-30-6680ea3f1392c.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/login/vendors/css/vendors.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/login/vendors/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/login/vendors/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/login/vendors/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/login/vendors/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/login/vendors/css/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/login/vendors/css/bordered-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/login/vendors/css/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/login/css/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/login/css/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/login/css/authentication.css') }}">
    <!-- END: Page CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"
        integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/login/main.css') }}">
    <!-- END: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/login/style.css') }}">


</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-cover">
                    <div class="auth-inner row m-0">
                        <!-- Brand logo--><a class="brand-logo">
                            <img src="https://demopharma.ayaantec.com/public/storage/settings/2024-06-30-6680ea3f1392c.png"
                                height="24" width="24">
                            <h2 class="brand-text ms-1 text-uppercase" style="color:#ffffff;">
                                Pharmacy</h2>
                        </a>
                        <!-- /Brand logo-->
                        <!-- Left Text-->
                        <div class="d-none d-lg-flex col-lg-8 align-items-center p-5" style="background:#161D31">
                            <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img
                                    class="img-fluid"
                                    src="https://demopharma.ayaantec.com/public/dashboard/app-assets/images/pages/login-v2-dark.svg"
                                    alt="Pharmacy" /></div>
                        </div>
                        <!-- /Left Text-->
                        <!-- Login-->
                        <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5 ">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                                <h2 class="card-title fw-bold mb-1 text-uppercase">Welcome to Pharmacy Software
                                    Solution.</h2>
                                <p class="card-text mb-2 ">
                                    Please sign-in to your account and manage your pharmacy
                                </p>
                                <form class="auth-login-form mt-2" action="https://demopharma.ayaantec.com/login"
                                    method="POST">
                                    <input type="hidden" name="_token" value="wvQ2iJA5WlGHyCkyohnkRKUos8kk4wxsvR3NJYFB">
                                    <div class="mb-1">
                                        <label class="form-label" for="login-email">Email
                                        </label>
                                        <input class="form-control " name="email" placeholder="Enter your email"
                                            value="" required autocomplete="email" id="email" autofocus />
                                    </div>
                                    <div class="mb-1">
                                        <div class="d-flex justify-content-between">
                                            <label class="form-label" for="login-password">Password</label>
                                        </div>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input class="form-control form-control-merge  " id="password"
                                                placeholder="Enter your password" name="password" required
                                                autocomplete="current-password" type="password" /><span
                                                class="input-group-text cursor-pointer"><i class="fas fa-eye"
                                                    data-feather="eye"></i></span>

                                        </div>
                                    </div>
                                    <div class="mb-1 d-flex justify-content-between align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="remember"
                                                name="remember" id="remember" />
                                            <label class="form-check-label" for="remember-me">
                                                Remember Me </label>
                                        </div>
                                        <a href="https://demopharma.ayaantec.com/password/reset"
                                            class="text-link">Forgot Password</a>
                                    </div>
                                    <button class="btn btn-dark w-100 text-black" tabindex="4">Sign In</button>

                                </form>


                                <div class="mb-1 mt-4">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td
                                                    style="padding-left:5px !important; padding-right:5px !important; color:#ffffff">
                                                    admin@ayaantec.com</td>
                                                <td
                                                    style="padding-left:5px !important; padding-right:5px !important; color:#ffffff">
                                                    123456</td>
                                                <td
                                                    style="padding-left:5px !important; padding-right:5px !important; color:#ffffff">
                                                    <button class="btn btn-dark" onclick="autoFill()">Copy</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td
                                                    style="padding-left:5px !important; padding-right:5px !important; color:#ffffff">
                                                    doctor@gmail.com</td>
                                                <td
                                                    style="padding-left:5px !important; padding-right:5px !important; color:#ffffff">
                                                    12345678</td>
                                                <td
                                                    style="padding-left:5px !important; padding-right:5px !important; color:#ffffff">
                                                    <button class="btn btn-dark" onclick="autoFill2()">Copy</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td
                                                    style="padding-left:5px !important; padding-right:5px !important; color:#ffffff">
                                                    salem@gmail.com</td>
                                                <td
                                                    style="padding-left:5px !important; padding-right:5px !important; color:#ffffff">
                                                    12345678</td>
                                                <td
                                                    style="padding-left:5px !important; padding-right:5px !important; color:#ffffff">
                                                    <button class="btn btn-dark" onclick="autoFill3()">Copy</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /Login-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('auth/login/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('auth/login/vendors/js/jquery-validate.min.js') }}">
    </script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('auth/login/vendors/js/core-app-menu.js') }}"></script>
    <script src="{{ asset('auth/login/vendors/js/core-app.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('auth/login/vendors/js/auth-login.js') }}"></script>
    <!-- END: Page JS-->
    <script type="text/javascript">
        function autoFill() {
            $('#email').val('admin@ayaantec.com');
            $('#password').val('123456');
        }

        function autoFill2() {
            $('#email').val('doctor@gmail.com');
            $('#password').val('12345678');
        }

        function autoFill3() {
            $('#email').val('salem@gmail.com');
            $('#password').val('12345678');
        }
    </script>

</body>
<!-- END: Body-->

</html>