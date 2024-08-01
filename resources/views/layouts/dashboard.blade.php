<!DOCTYPE html>
<html class="loading " lang="" data-layout="dark-layout" data-textdirection="ltr">

<head>
    <meta charset="utf-8">
    <meta name="language" content="English">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="title" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://metatags.io/">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" {{ asset('auth/dashboard/images/noimage.png') }}'>
    <title>Admin - Dashboard</title>

    <link rel="apple-touch-icon" href="{{ asset('auth/dashboard/settings/2024-06-30-6680ea3f1392c.png') }}">
    <link rel="shortcut icon" type="image/x-icon"
        href="{{ asset('auth/dashboard/settings/2024-06-30-6680ea3f1392c.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <link href="{{ asset('auth/dashboard/css/vendors.min.css?time=1722536124') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('auth/dashboard/fontawesome/css/all.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('auth/dashboard/css/apexcharts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/dashboard/css/morris.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/dashboard/css/toastr-min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/dashboard/css/ext-component-toastr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/dashboard/css/bootstrap.css?time=1722536124') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('auth/dashboard/css/bootstrap-extended.css?time=1722536124') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/dashboard/css/components.css?time=1722536124') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/dashboard/css/dark-layout.css?time=1722536124') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('auth/dashboard/css/vertical-menu.css?time=1722536124') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/dashboard/css/style.css?time=1722536124') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/dashboard/css/custom.css?time=1722536124') }}">

    <style>
        @media print {
            .header-navbar {
                display: none !important;
            }

            .main-menu {
                display: none !important;
            }

            .page-wrapper .card {
                border-top: unset !important;
            }

            footer {
                display: none !important;
            }

            .card-header nav {
                display: none !important;
            }

            .pagetitle {
                display: none;
            }

            .card {
                box-shadow: none;
            }

            #window-printer {
                display: none;
            }
        }
    </style>
</head>

<body class="vertical-layout vertical-menu-modern navbar-floating footer-static" data-open="click"
    data-menu="vertical-menu-modern" data-col="">
    <!-- Header -->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light  container-xxl navBar"
        id="desktopmenu">
        <div class="navbar-container d-flex content align-items-center  ">
            <ul class="nav navbar-nav align-items-center px-2">
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn btn-primary border-r20" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Add New <i class="fa fa-plus-circle"></i>
                        </button>

                        <ul class="dropdown-menu border-r20 border-0 shadow-lg overflow-hidden"
                            aria-labelledby="dropdownMenuButton1">
                            <li>
                                <a class="dropdown-item" href="https://demopharma.ayaantec.com/medicines/add">
                                    <i class="fas fa-pills"></i> Add Medicine
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="https://demopharma.ayaantec.com/supplier/add">
                                    <i class="fa-solid fa-people-carry-box"></i> Add Manufacture
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="https://demopharma.ayaantec.com/purchase/create">
                                    <i class="fas fa-cart-shopping"></i> Add Purchase
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="https://demopharma.ayaantec.com/vendor/create">
                                    <i class="fa-solid fa-store"></i> Add Vendor
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <ul class="nav navbar-nav align-items-center px-2 m-auto">
                <li class="nav-item">
                    <h5 class="m-0 fw-bold date">
                        Thursday, August 1, 2024
                    </h5>
                </li>
            </ul>
            <ul class="nav navbar-nav align-items-center ms-auto gap-1">
                <!-- Ecommerce order notification -->
                <li class="nav-item dropdown dropdown-language">
                    <a class="nav-link dropdown-toggle" id="dropdown-flag"
                        href="https://demopharma.ayaantec.com/local/en" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <img class="rounded-circle"
                            src="https://demopharma.ayaantec.com/public/storage/language/2024-05-17-6647c9d153dd0.png"
                            height="20" width="20" alt="">
                        <span class="selected-language">English</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end border-0 shadow-sm rounded-3"
                        aria-labelledby="dropdown-flag">
                        <a class="dropdown-item d-flex gap-1 mx-1 p-0 rounded-3"
                            href="https://demopharma.ayaantec.com/local/en" data-language="en">
                            <img class="rounded-circle"
                                src="https://demopharma.ayaantec.com/public/storage/language/2024-05-17-6647c9d153dd0.png"
                                height="20" width="20" alt="">
                            <span>English</span>
                        </a>
                        <a class="dropdown-item d-flex gap-1 mx-1 p-0 rounded-3"
                            href="https://demopharma.ayaantec.com/local/INDIA" data-language="en">
                            <img class="rounded-circle" src="https://demopharma.ayaantec.com/public/images/noimage.png"
                                height="20" width="20" alt="">
                            <span>ENGLISH</span>
                        </a>
                    </div>
                </li>

                <li class="nav-item dropdown dropdown-cart me-25">
                    <a class="nav-link h5 fw-bold mb-0" href="https://demopharma.ayaantec.com/pos">(POS)
                        &nbsp;<i class="fas fa-print"></i></a>
                </li>
                <li class="nav-item dropdown mx-3">
                    <a class="nav-link" title="Ecommerce orders" href="#" data-bs-toggle="dropdown"
                        aria-expanded="true">
                        <i class="ficon text-dark" data-feather="bell"></i>
                        <span class="badge rounded-pill bg-danger badge-up">0</span>
                    </a>
                    <div
                        class="dropdown-menu dropdown-menu-end dropDown shadow-lg border-0 admin-notification-dropdown">
                        <div class="list-group  list-group-flush">
                            <div class="list-group-item">
                                <h4 class="position-relative text-primary">Notications
                                    (10)</h4>
                            </div>
                        </div>
                        <div class="notification-box">
                            <div class="list-group list-group-flush">
                                <div class="list-group-item d-flex">
                                    <i class="ficon text-secondary  me-1" data-feather="bell"></i>
                                    <a href="https://demopharma.ayaantec.com/notifications/show/1" class="text-muted">
                                        <h5 class="text-muted">A new customer registered</h5>
                                        <div class="description">
                                            MOHAMMED SHAWKAT ALI registered as a customer
                                            <br><small class="text-muted">2 months ago</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group list-group-flush">
                                <div class="list-group-item d-flex">
                                    <i class="ficon text-secondary  me-1" data-feather="bell"></i>
                                    <a href="https://demopharma.ayaantec.com/notifications/show/2" class="text-muted">
                                        <h5 class="text-muted">A new customer registered</h5>
                                        <div class="description">
                                            SHABAN BUSEGA registered as a customer
                                            <br><small class="text-muted">2 months ago</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group list-group-flush">
                                <div class="list-group-item d-flex">
                                    <i class="ficon text-secondary  me-1" data-feather="bell"></i>
                                    <a href="https://demopharma.ayaantec.com/notifications/show/3" class="text-muted">
                                        <h5 class="text-muted">A new customer registered</h5>
                                        <div class="description">
                                            Arshan Khan registered as a customer
                                            <br><small class="text-muted">2 months ago</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group list-group-flush">
                                <div class="list-group-item d-flex">
                                    <i class="ficon text-secondary  me-1" data-feather="bell"></i>
                                    <a href="https://demopharma.ayaantec.com/notifications/show/4" class="text-muted">
                                        <h5 class="text-muted">A new customer registered</h5>
                                        <div class="description">
                                            roshan Patil registered as a customer
                                            <br><small class="text-muted">2 months ago</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group list-group-flush">
                                <div class="list-group-item d-flex">
                                    <i class="ficon text-secondary  me-1" data-feather="bell"></i>
                                    <a href="https://demopharma.ayaantec.com/notifications/show/5" class="text-muted">
                                        <h5 class="text-muted">A new customer registered</h5>
                                        <div class="description">
                                            Shri Ganesh registered as a customer
                                            <br><small class="text-muted">2 months ago</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group list-group-flush">
                                <div class="list-group-item d-flex">
                                    <i class="ficon text-secondary  me-1" data-feather="bell"></i>
                                    <a href="https://demopharma.ayaantec.com/notifications/show/6" class="text-muted">
                                        <h5 class="text-muted">A new customer registered</h5>
                                        <div class="description">
                                            Sideral registered as a customer
                                            <br><small class="text-muted">2 months ago</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group list-group-flush">
                                <div class="list-group-item d-flex">
                                    <i class="ficon text-secondary  me-1" data-feather="bell"></i>
                                    <a href="https://demopharma.ayaantec.com/notifications/show/7" class="text-muted">
                                        <h5 class="text-muted">A new customer registered</h5>
                                        <div class="description">
                                            Gift Gallery registered as a customer
                                            <br><small class="text-muted">1 month ago</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group list-group-flush">
                                <div class="list-group-item d-flex">
                                    <i class="ficon text-secondary  me-1" data-feather="bell"></i>
                                    <a href="https://demopharma.ayaantec.com/notifications/show/8" class="text-muted">
                                        <h5 class="text-muted">A new customer registered</h5>
                                        <div class="description">
                                            brijesh choudhary registered as a customer
                                            <br><small class="text-muted">3 weeks ago</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group list-group-flush">
                                <div class="list-group-item d-flex">
                                    <i class="ficon text-secondary  me-1" data-feather="bell"></i>
                                    <a href="https://demopharma.ayaantec.com/notifications/show/9" class="text-muted">
                                        <h5 class="text-muted">A new order has been placed</h5>
                                        <div class="description">
                                            &lt;p&gt;A new order has been placed on...
                                            <br><small class="text-muted">3 weeks ago</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group list-group-flush">
                                <div class="list-group-item d-flex">
                                    <i class="ficon text-secondary  me-1" data-feather="bell"></i>
                                    <a href="https://demopharma.ayaantec.com/notifications/show/10" class="text-muted">
                                        <h5 class="text-muted">A new customer registered</h5>
                                        <div class="description">
                                            wvsodjgbw registered as a customer
                                            <br><small class="text-muted">2 weeks ago</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item justify-content-center">
                                <a href="https://demopharma.ayaantec.com/notifications/index"
                                    class="d-block text-center text-decoration-underline">
                                    View All Notification
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                        id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">John Doe</span><span
                                class="user-status">
                                super_admin
                            </span>
                        </div>
                        <span class="avatar"><img class="round"
                                src="https://demopharma.ayaantec.com/public/storage/images/profile/2024-05-28-665554cd0d24d.png"
                                alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropDown shadow-lg border-0"
                        aria-labelledby="dropdown-user">

                        <a class="dropdown-item" href="https://demopharma.ayaantec.com/profile_setting"><i
                                class="me-50 fas fa-th"></i>
                            Dashboard</a>
                        <a class="dropdown-item py-1" href="https://demopharma.ayaantec.com/profile_setting"><i
                                class="me-50" data-feather="lock"></i> Change Password
                        </a>

                        <a class="dropdown-item py-1" href="https://demopharma.ayaantec.com/profile_info_setting"><i
                                class="me-50" data-feather="eye"></i> Change Info
                        </a>
                        <a class="dropdown-item py-1" href="https://demopharma.ayaantec.com/settings"><i class="me-50"
                                data-feather="settings"></i> Settings
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item py-1" href="https://demopharma.ayaantec.com/logout"><i class="me-50"
                                data-feather="power"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- END: Header-->


    <!--Mobile Menu-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light  container-xxl navBar"
        id="mobilemenu">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li id="mm" class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="fa fa-bars"></i></a>
                    </li>
                </ul>
            </div>
            <ul id="mul" class="nav navbar-nav align-items-center">

                <li id="mm" class="nav-item dropdown dropdown-cart me-25"><a class="nav-link"
                        href="https://demopharma.ayaantec.com/profit"><i class="fas fa-file-text"></i></a></li>

                <li id="mm" class="nav-item dropdown dropdown-cart me-25"><a class="nav-link"
                        href="https://demopharma.ayaantec.com/pos"><i class="fas fa-print"></i></a></li>

                <li id="mm" class="nav-item dropdown dropdown-cart me-25"><a class="nav-link"
                        href="https://demopharma.ayaantec.com/profile_info_setting"><i class="fas fa-cog"></i></a></li>

                <li id="mm" class="nav-item dropdown dropdown-cart me-25"><a class="nav-link"
                        href="https://demopharma.ayaantec.com/logout"><i class="fa fa-power-off"></i></a></li>
            </ul>
        </div>
    </nav>
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header mb-2">
            <ul class="nav navbar-nav flex-row justify-content-between">
                <li class="nav-item me-auto">
                    <a class="navbar-brand" href="https://demopharma.ayaantec.com/dashboard">
                        <span class="brand-logo">
                            <img height="40" width="160"
                                src="https://demopharma.ayaantec.com/public/storage/settings/2024-06-30-6680ea493028b.png"
                                alt="Logo" />
                        </span>
                        <h4 class="brand-text"></h4>
                    </a>
                </li>
                <li class="nav-item nav-toggle">
                    <a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse">
                        <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
                        <i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                            data-feather="disc" data-ticon="disc"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="active">
                    <a class="title d-flex align-items-center" href="https://demopharma.ayaantec.com/dashboard">
                        <i class="fa fa-tachometer"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            Dashboard
                        </span>
                    </a>
                </li>
                <li class=" nav-item  || ">
                    <a class="d-flex align-items-center" href="#">
                        <i class="fas fa-user-gear"></i>
                        <span class="menu-title text-truncate" data-i18n="Invoice">
                            User &amp; Role
                        </span>
                    </a>
                    <ul class="menu-content">
                        <li class="">
                            <a class="title d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/users/index">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    Users
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="title d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/roles/index">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    Roles &amp; Permissions
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item  || ">
                    <a class="d-flex align-items-center" href="#">
                        <i class="fas fa-gear"></i>
                        <span class="menu-title text-truncate" data-i18n="Invoice">
                            Settings
                        </span>
                    </a>
                    <ul class="menu-content">
                        <li class="">
                            <a class="title d-flex align-items-center" href="https://demopharma.ayaantec.com/settings">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    General Setting
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="title d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/settings/email-setting">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    Email Setting
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="title d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/languages/index">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    Language Setting
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item  || ">
                    <a class="d-flex align-items-center" href="#">
                        <i class="fas fa-users"></i>
                        <span class="menu-title text-truncate" data-i18n="Invoice">
                            Customers
                        </span>
                    </a>
                    <ul class="menu-content">
                        <li class="">
                            <a class="title d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/customers/create">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    Customer Add
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="title d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/customers/index">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    Customer List
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item ">
                    <a class="d-flex align-items-center" href="#">
                        <i class="fas fa-gear"></i>
                        <span class="menu-title text-truncate" data-i18n="Invoice">
                            Expense
                        </span>
                    </a>
                    <ul class="menu-content">
                        <li class="">
                            <a class="title d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/expenses/create">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    New Expense
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="title d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/expenses/index">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    Expense List
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="title d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/expense-categories/create">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    New Category
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="title d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/expense-categories/index">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    Category List
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item ">
                    <a class="d-flex align-items-center" href="#">
                        <i class="fas fa-pills"></i>
                        <span class="menu-title text-truncate" data-i18n="Invoice">
                            Medicine Stock
                        </span>
                    </a>
                    <ul class="menu-content">
                        <li class="">
                            <a class="title d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/report/instock-medicine">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    In Stock
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="title d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/report/lowstock-medicine">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    Low Stock
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="title d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/report/stockout-medicine">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    Stockout
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="title d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/report/upcoming-expire-medicine">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    Upcoming Expired
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="title d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/report/already-expire-medicine">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    Already Expired
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Ecommerce Setup -->
                <li class=" nav-item ">
                    <a class="d-flex align-items-center" href="#">
                        <i class="fas fa-shopping-bag"></i>
                        <span class="menu-title text-truncate" data-i18n="Invoice">
                            Ecommerce Management
                        </span>
                        <span class="badge bg-danger">Addon</span>
                    </a>
                    <ul class="menu-content">
                        <li class="">
                            <a class="d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/ecommerce/setting">
                                <i class="fas fa-cogs"></i>
                                <span class="menu-item text-truncate" data-i18n="List">
                                    Settings
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="d-flex align-items-center" href="https://demopharma.ayaantec.com/ecommerce/pages">
                                <i class="fas fa-cogs"></i>
                                <span class="menu-item text-truncate" data-i18n="List">
                                    Pages
                                </span>
                            </a>
                        </li>
                        <li class=" || ">
                            <a class="d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/ecommerce/slider">
                                <i class="fas fa-images"></i>
                                <span class="menu-item text-truncate" data-i18n="List">
                                    Slider
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/ecommerce/product-list">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate" data-i18n="List">
                                    Products
                                </span>
                            </a>
                        </li>
                        <li class=" || ">
                            <a class="d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/ecommerce/product/instock">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate" data-i18n="List">
                                    Instock Product
                                </span>
                            </a>
                        </li>
                        <li class=" || ">
                            <a class="d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/ecommerce/product-types">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate" data-i18n="List">
                                    Categories
                                </span>
                            </a>
                        </li>
                        <li class=" || ">
                            <a class="d-flex align-items-center" href="https://demopharma.ayaantec.com/ecommerce/order">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate" data-i18n="List">
                                    Orders
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="d-flex align-items-center" href="#">
                                <i class="fas fa-list"></i>
                                <span class="menu-item text-truncate" data-i18n="List">
                                    Reports
                                </span>
                            </a>
                            <ul class="menu-content">
                                <li class="">
                                    <a class="d-flex align-items-center"
                                        href="https://demopharma.ayaantec.com/ecommerce/report/top-sale-product">
                                        <i class="fas fa-circle"></i>
                                        <span class="menu-item text-truncate" data-i18n="List">
                                            Top Sale Product
                                        </span>
                                    </a>
                                </li>
                                <li class="">
                                    <a class="d-flex align-items-center"
                                        href="https://demopharma.ayaantec.com/ecommerce/report/sale">
                                        <i class="fas fa-circle"></i>
                                        <span class="menu-item text-truncate">
                                            Sales Report
                                        </span>
                                    </a>
                                </li>
                                <li class="">
                                    <a class="d-flex align-items-center"
                                        href="https://demopharma.ayaantec.com/ecommerce/report/profit-loss">
                                        <i class="fas fa-circle"></i>
                                        <span class="menu-item text-truncate">
                                            Profit &amp; Loss
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" || ">
                            <a class="d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/ecommerce/customer">
                                <i class="fas fa-users"></i>
                                <span class="menu-item text-truncate" data-i18n="List">
                                    Customers
                                </span>
                            </a>
                        </li>
                        <li class=" || ">
                            <a class="d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/ecommerce/csv/export-import">
                                <i class="fas fa-cloud-upload"></i>
                                <span class="menu-item text-truncate" data-i18n="List">
                                    Export &amp; Import
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- HRM -->
                <li class="nav-item ">
                    <a class="d-flex align-items-center" href="#">
                        <i class="fas fa-address-book"></i>
                        <span class="menu-title text-truncate" data-i18n="Invoice">
                            Hr Management
                        </span>
                        <span class="badge bg-danger">Addon</span>
                    </a>
                    <ul class="menu-content">
                        <li class="">
                            <a class="d-flex align-items-center" href="https://demopharma.ayaantec.com/hrm/department">
                                <i class="fas fa-user-graduate"></i>
                                <span class="menu-item text-truncate" data-i18n="List">
                                    Departments
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="d-flex align-items-center" href="https://demopharma.ayaantec.com/hrm/designation">
                                <i class="fas fa-user-cog"></i>
                                <span class="menu-item text-truncate" data-i18n="List">
                                    Designations
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="d-flex align-items-center" href="https://demopharma.ayaantec.com/hrm/employee">
                                <i class="fas fa-user-friends"></i>
                                <span class="menu-item text-truncate" data-i18n="List">
                                    Employees
                                </span>
                            </a>
                        </li>
                        <li class=" || ">
                            <a class="d-flex align-items-center" href="https://demopharma.ayaantec.com/hrm/attendance">
                                <i class="fas fa-user-check"></i>
                                <span class="menu-item text-truncate" data-i18n="List">
                                    Attendance
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="d-flex align-items-center" href="#">
                                <i class="fas fa-pager"></i>
                                <span class="menu-item text-truncate" data-i18n="List">
                                    Payroll
                                </span>
                            </a>
                            <ul class="menu-content">
                                <li class="">
                                    <a class="d-flex align-items-center"
                                        href="https://demopharma.ayaantec.com/hrm/payroll/benefit">
                                        <i class="fas fa-circle"></i>
                                        <span class="menu-item text-truncate" data-i18n="List">
                                            Benefits
                                        </span>
                                    </a>
                                </li>
                                <li class="">
                                    <a class="d-flex align-items-center"
                                        href="https://demopharma.ayaantec.com/hrm/payroll/salary-setup">
                                        <i class="fas fa-circle"></i>
                                        <span class="menu-item text-truncate">
                                            Salary Setup
                                        </span>
                                    </a>
                                </li>
                                <li class="">
                                    <a class="d-flex align-items-center"
                                        href="https://demopharma.ayaantec.com/hrm/payroll/salary-sheet/generate">
                                        <i class="fas fa-circle"></i>
                                        <span class="menu-item text-truncate">
                                            Salary Generate
                                        </span>
                                    </a>
                                </li>
                                <li class="">
                                    <a class="d-flex align-items-center"
                                        href="https://demopharma.ayaantec.com/hrm/payroll/salary-sheet">
                                        <i class="fas fa-circle"></i>
                                        <span class="menu-item text-truncate">
                                            Salary Sheet
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a class="d-flex align-items-center" href="https://demopharma.ayaantec.com/hrm/expense">
                                <i class="fas fa-wallet"></i>
                                <span class="menu-item text-truncate" data-i18n="List">
                                    Expense
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item ">
                    <a class="d-flex align-items-center" href="#">
                        <i class="fas fa-bank"></i>
                        <span class="menu-title text-truncate" data-i18n="Invoice">
                            Accounts
                        </span>
                        <span class="badge bg-danger">Addon</span>
                    </a>
                    <ul class="menu-content">
                        <li class="">
                            <a class="d-flex align-items-center" href="https://demopharma.ayaantec.com/account-types">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate" data-i18n="List">
                                    Account Type
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="d-flex align-items-center" href="https://demopharma.ayaantec.com/accounts">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate" data-i18n="List">
                                    Account
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="d-flex align-items-center" href="https://demopharma.ayaantec.com/transactions">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate" data-i18n="List">
                                    Transaction
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/reports/trail-balance">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate" data-i18n="List">
                                    Trail Balance
                                </span>
                            </a>
                        </li>
                        <li class=" || ">
                            <a class="d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/reports/balance-sheet">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate" data-i18n="List">
                                    Balance Sheet
                                </span>
                            </a>
                        </li>
                        <li class=" || ">
                            <a class="d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/reports/income-statement">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate" data-i18n="List">
                                    Income Statement
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item "><a class="d-flex align-items-center" href="#"><i
                            class="fa-solid fa-people-carry-box"></i><span class="menu-title text-truncate"
                            data-i18n="Invoice">Supplier</span></a>
                    <ul class="menu-content">
                        <li class="">
                            <a class="title d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/supplier/add">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    Supplier Add
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="title d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/supplier/list">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    Supplier List
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Vendors Routes -->
                <li class=" nav-item ">
                    <a class="d-flex align-items-center" href="#">
                        <i class="fa-solid fa-store"></i>
                        <span class="menu-title text-truncate" data-i18n="Invoice">Vendors</span>
                    </a>
                    <ul class="menu-content">
                        <li class="">
                            <a class="title d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/vendor/create">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    Vendor Add
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="title d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/vendor/list">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    Vendor List
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item  ||  ||  ||  ||  ||  || ">
                    <a class="d-flex align-items-center" href="#"><i class="fas fa-pills"></i><span
                            class="menu-title text-truncate" data-i18n="Invoice">Medicine</span></a>
                    <ul class="menu-content">

                        <li class="">
                            <a class="title d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/medicines/add">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    Medicine Add
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="title d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/medicines/list">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    Mdicine List
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="title d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/medicines/categories">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    Categories
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="title d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/medicines/unit">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    Units
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="title d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/medicines/leaf">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    Leaf
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="title d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/medicines/type">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    Types
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="title d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/medicines/import">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    Medicine Import
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item  ">
                    <a class="d-flex align-items-center" href="#"><i class="fas fa-cart-shopping"></i><span
                            class="menu-title text-truncate" data-i18n="Invoice">Purchase</span>
                    </a>
                    <ul class="menu-content">
                        <li class="">
                            <a class="title d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/purchase/create">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    Add Purchase
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="title d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/purchase/index">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    Purchase History
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="title d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/purchase/return-history">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    Return History
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  || "><a class="d-flex align-items-center" href="#"><i
                            class="fa-solid fa-file-invoice"></i><span class="menu-title text-truncate"
                            data-i18n="Invoice">Sales</span></a>
                    <ul class="menu-content">
                        <li class="">
                            <a class="title d-flex align-items-center" href="https://demopharma.ayaantec.com/pos">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    New Invoice
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="title d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/invoice/reports">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    Invoice History
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="title d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/returned_history">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    Return History
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item  ||  ||  ||  || ">
                    <a class="d-flex align-items-center" href="#">
                        <i class="fa-solid fa-chart-line"></i>
                        <span class="menu-title text-truncate" data-i18n="Invoice">
                            Reports
                        </span>
                    </a>
                    <ul class="menu-content">
                        <li class="">
                            <a class="title d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/report/customer/due">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    Customer Due
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="title d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/report/supplier/due">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    Payable Manufacturer
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="title d-flex align-items-center" href="https://demopharma.ayaantec.com/reports">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    Sells &amp; Purchase Reports
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="title d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/report/medicine/topsell">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    Top Sell Medicine
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="title d-flex align-items-center" href="https://demopharma.ayaantec.com/profit">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    Medicine Profit &amp; Loss
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="title d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/report/business/profit-loss">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    Business Profit &amp; Loss
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item  ||  ||  || ">
                    <a class="d-flex align-items-center" href="#">
                        <i class="fas fa-prescription"></i>
                        <span class="menu-title text-truncate" data-i18n="Invoice">
                            Prescription
                        </span>
                    </a>
                    <ul class="menu-content">
                        <li class="">
                            <a class="title d-flex align-items-center" href="https://demopharma.ayaantec.com/doctor">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    Doctors
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="title d-flex align-items-center" href="https://demopharma.ayaantec.com/patient">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    Patients
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="title d-flex align-items-center" href="https://demopharma.ayaantec.com/test">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    Diagnosis &amp; Tests
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a class="title d-flex align-items-center"
                                href="https://demopharma.ayaantec.com/prescription">
                                <i class="fas fa-circle"></i>
                                <span class="menu-item text-truncate " data-i18n="List">
                                    Prescriptions
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a class="title d-flex align-items-center" href="https://demopharma.ayaantec.com/payment_methdod">
                        <i class="fas fa-circle"></i>
                        <span class="menu-item text-truncate " data-i18n="List">
                            Payment Method
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- End Sidebar -->


    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="row my-2">
                    <div class="col-lg-8">
                        <div class="card border-0 border-r20 py-1">
                            <div class="card-header bg-transparent border-0">
                                <h4>Reports</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3 mb-1 col-6">
                                        <div class="small-box first">
                                            <div class="smalll-box d-flex justify-content-between flex-column gap-1">
                                                <div class="icon">
                                                    <i class="fas fa-pills fa-2xl"></i>
                                                </div>
                                                <div class="inner">
                                                    <h3>8,901</h3>
                                                </div>
                                            </div>
                                            <a href="https://demopharma.ayaantec.com/report/instock-medicine"
                                                class="small-box-footer">
                                                <span>Stock Medicine</span> <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 mb-1 col-6">
                                        <div class="small-box second">
                                            <div class="smalll-box d-flex justify-content-between flex-column gap-1">
                                                <div class="icon">
                                                    <i class="fas fa-usd fa-2xl"></i>
                                                </div>
                                                <div class="inner">
                                                    <h3>₹5,317,993.30</h3>
                                                </div>
                                            </div>
                                            <a href="https://demopharma.ayaantec.com/invoice/reports"
                                                class="small-box-footer">
                                                <span>Total Sales</span> <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 mb-1 col-6">
                                        <div class="small-box third">
                                            <div class="smalll-box d-flex justify-content-between flex-column gap-1">
                                                <div class="icon">
                                                    <i class="fas fa-hourglass-end fa-2xl"></i>
                                                </div>
                                                <div class="inner">
                                                    <h3>10</h3>
                                                </div>
                                            </div>
                                            <a href="https://demopharma.ayaantec.com/report/already-expire-medicine"
                                                class="small-box-footer">
                                                <span>Expired Medicine</span> <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 mb-1 col-6">
                                        <div class="small-box fourth">
                                            <div class="smalll-box d-flex justify-content-between flex-column gap-1">
                                                <div class="icon">
                                                    <i class="fa-brands fa-product-hunt fa-2xl"></i>
                                                </div>
                                                <div class="inner">
                                                    <h3>10</h3>
                                                </div>
                                            </div>
                                            <a href="https://demopharma.ayaantec.com/report/stockout-medicine"
                                                class="small-box-footer">
                                                <span>Stock Out Medicine</span> <i
                                                    class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card border-0 border-r20">
                            <div class="card-header bg-transparent border-0">
                                <h4 class="card-title">Purchases &amp; Sales</h4>
                            </div>
                            <div class="card-body">
                                <div id="line-example" style="height: 180px;color: red" class="line-atl morris-chart">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section id="dashboard-ecommerce">
                    <div class="row">
                        <div class="col-md-7 col-sm-12">
                            <div class="card border-0 border-r20">
                                <div class="card-header">
                                    <h4>Others</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col statistic px-2 col-border-right">
                                            <div class="text text-dark text-center text-capitalize">
                                                <h4 class="count">49</h4>
                                                <h6 class="mb-0">Total Customer</h6>
                                            </div>
                                        </div>
                                        <div class="col statistic px-2 col-border-right">
                                            <div class="text text-dark text-center text-capitalize">
                                                <h4 class="count">209</h4>
                                                <h6 class="mb-0">Total Manufacturer</h6>
                                            </div>
                                        </div>
                                        <div class="col statistic px-2 col-border-right">
                                            <div class="text text-dark text-center text-capitalize">
                                                <h4 class="count">₹1,740.80</h4>
                                                <h6 class="mb-0">Total Cash In Hand </h6>
                                            </div>
                                        </div>
                                        <div class="col statistic px-2">
                                            <div class="text text-dark text-center text-capitalize">
                                                <h4 class="count">₹2,093,696.95</h4>
                                                <h6 class="mb-0">Total Customer Due</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="basic-table">
                                <div class="col-md-6 col-sm-12">
                                    <div class="card border-0 border-r20">
                                        <div class="card-header bg-primary border-0">
                                            <h4 class="card-title Titlee">Today's sell</h4>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Title</th>
                                                        <th>Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            Today Invoice
                                                        </td>
                                                        <td>0</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Sold Amount
                                                        </td>
                                                        <td>₹0.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Received Amount
                                                        </td>
                                                        <td>₹0.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">

                                    <div class="card border-0 border-r20">
                                        <div class="card-header bg-success border-0">
                                            <h4 class="card-title Titlee">Today&#039;s Purchase </h4>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Title</th>
                                                        <th>Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Today Purchase</td>
                                                        <td>0</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Purchase Amount</td>
                                                        <td>₹0.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Paid Amount</td>
                                                        <td>₹0.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12">
                            <div class="card border-0 border-r20">
                                <div class="card-header bg-transparent border-0">
                                    <div class="header-left">
                                        <h4 class="card-title" style="color:#000; font-weight:600;">
                                            Purchases &amp; Sales
                                        </h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="piChart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div id="stockmodal" class="modal fade show" role="dialog" style="padding-right: 15px; display: none;"
                    aria-modal="true">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header d-flex justify-content-between">
                                <h4 class="modal-title">Expired Medicine</h4>
                                <button type="button" class="close btn btn-sm btn-light"
                                    data-bs-dismiss="modal">×</button>
                            </div>
                            <div class="modal-body">
                                <table id="" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Batch</th>
                                            <th class="text-center">Expired On</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                Febus 40
                                            </td>
                                            <td>23456</td>

                                            <td>0020-12-30</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Doximar 200
                                            </td>
                                            <td>3456</td>

                                            <td>0024-12-30</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Paracetamol 750mg
                                            </td>
                                            <td>34566</td>

                                            <td>0202-06-12</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Magnesio
                                            </td>
                                            <td>2000</td>

                                            <td>2024-06-07</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Paracetamol 750mg
                                            </td>
                                            <td>121</td>

                                            <td>2024-05-24</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Paracetamol 750mg
                                            </td>
                                            <td>1</td>

                                            <td>2024-05-24</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Magnesio
                                            </td>
                                            <td>1</td>

                                            <td>2024-05-24</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Doximar 200
                                            </td>
                                            <td>12</td>

                                            <td>0323-02-23</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Cefim-3 DS
                                            </td>
                                            <td>12</td>

                                            <td>0323-02-23</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Paramol
                                            </td>
                                            <td>1111</td>

                                            <td>2024-05-28</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div>
                                    <h4>
                                        <center>Stock Out</center>
                                    </h4>
                                </div>
                                <table id="" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Name</th>

                                            <th class="text-center">Qauntity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">
                                                Acical-D
                                            </td>
                                            <td class="text-center">
                                                0
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                crocin
                                            </td>
                                            <td class="text-center">
                                                0
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                Black Flower&#039;s
                                            </td>
                                            <td class="text-center">
                                                0
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                Manav
                                            </td>
                                            <td class="text-center">
                                                0
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                Ampicillin Capsule 250 g
                                            </td>
                                            <td class="text-center">
                                                0
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                BooK
                                            </td>
                                            <td class="text-center">
                                                -1
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                Kay
                                            </td>
                                            <td class="text-center">
                                                -1
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                Crocin
                                            </td>
                                            <td class="text-center">
                                                0
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                Calci
                                            </td>
                                            <td class="text-center">
                                                -5
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                Omol
                                            </td>
                                            <td class="text-center">
                                                0
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                Eagan
                                            </td>
                                            <td class="text-center">
                                                0
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                Test Test
                                            </td>
                                            <td class="text-center">
                                                -10
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                Test medicine 01
                                            </td>
                                            <td class="text-center">
                                                0
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                Action
                                            </td>
                                            <td class="text-center">
                                                -6
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                Pillton
                                            </td>
                                            <td class="text-center">
                                                0
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="is_modal_shown" id="is_modal_shown">
                                <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <footer>
                    <div class="d-flex gap-2 align-items-center">
                        <p>©Copyright 2024 <b>Pharmacy</b>.</p>
                        <p>Software Version <b></b></p>
                    </div>
                </footer>

            </div>
        </div>
    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>

    <script type="text/javascript" src="{{ asset('auth/dashboard/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('auth/dashboard/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('auth/dashboard/js/vendors.min.js') }}"></script>

    <script src="{{ asset('auth/dashboard/js/toastr.min.js') }}"></script>
    <script src="{{ asset('auth/dashboard/js/app-menu.js') }}"></script>
    <script src="{{ asset('auth/dashboard/js/app.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#stockmodal').modal('show');
        });
    </script>

    <script src="{{ asset('auth/dashboard/morris-chart/popper.min.js') }}"></script>
    <script src="{{ asset('auth/dashboard/morris-chart//raphael-min.js') }}"></script>
    <script src="{{ asset('auth/dashboard/morris-chart/morris.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        Morris.Line({
            element: 'line-example',
            data: [{"y":"2024-07-25","a":0,"b":0},{"y":"2024-07-26","a":3,"b":1},{"y":"2024-07-27","a":4,"b":4},{"y":"2024-07-28","a":18,"b":1},{"y":"2024-07-29","a":11,"b":2},{"y":"2024-07-30","a":4,"b":1},{"y":"2024-07-31","a":2,"b":1},{"y":"2024-08-01","a":0,"b":0}],
            xkey: 'y',
            labelColor: '#000000',
            ykeys: ['a', 'b'],
            labels: ['Sales', 'Purchase']
        });
    </script>


    <script>
        var options = {
            series: [1077661.8, 5317993.3],
            chart: {
                width: 380,
                type: 'pie',
            },
            colors: ['#0088ff', '#f8bf15'],
            labels: ['Purchase', 'Sales'],
            legend: {
                position: 'bottom',
                show: true,
                showForSingleSeries: false,
                showForNullSeries: true,
                showForZeroSeries: true,
            },
        };

        var chart = new ApexCharts(document.querySelector("#piChart"), options);
        chart.render();
    </script>

    <!-- END: Page JS-->

    <script>
        $(window).on('load', function () {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
    </script>

    <script type="text/javascript"></script>

</body>

</html>