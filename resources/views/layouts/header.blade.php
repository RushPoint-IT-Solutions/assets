<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ASSETS') }}</title>
    <link rel="shortcut icon" href="{{url('assets/images/marsu-logo.png')}}">

    <!-- Layout config Js -->
    <script src="{{asset('/assets/js/layout.js')}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{asset('/assets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


 
    @yield('css')
    <style>
        .helpdesk-link-wrapper {
            position: absolute;
            bottom: 0;
            width: 100%;
        }
        
        .loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url("{{ asset('assets/images/loader.gif') }}") 50% 50% no-repeat white;
            opacity: .8;
            background-size: 120px 120px;
        }   
        .menu-title, .navbar-menu .navbar-nav .nav-link {
            color: #FFF !important;
        }
        .navbar-menu {
            background: #420906 !important;
        }

    </style>
    

</head>
<body>
    <div id="loader" class="loader"></div>
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="{{url('/')}}" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{asset('assets/images/library-icon.png')}}" alt="" height="100">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('assets/images/library-icon.png')}}" alt="" height="100">
                                </span>
                            </a>

                            <a href="{{url('/')}}" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{asset('assets/images/library-icon.png')}}" alt="" height="100">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('assets/images/library-icon.png')}}" alt="" height="100">
                                </span>
                            </a>
                        </div>
                        
                        <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger material-shadow-none" id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>
                        
                         <form class="app-search ">
                        </form>
                    </div>

                    <div class="d-flex align-items-center">
                        {{-- <div class="dropdown topbar-head-dropdown ms-1 header-item" id="notificationDropdown">
                            <button type="button" class="btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                                <i class='bx bx-bell fs-22'></i>
                                <span class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger">3<span class="visually-hidden">unread messages</span></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                                <div class="dropdown-head bg-pattern rounded-top" style="background-color: #800000;">
                                    <div class="p-3">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-0 fs-16 fw-semibold text-white"> Notifications </h6>
                                            </div>
                                            <div class="col-auto dropdown-tabs">
                                                <span class="badge bg-light text-body fs-13"> 3 New</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-content position-relative" id="notificationItemsTabContent">
                                    <div class="tab-pane fade show active py-2 ps-2" id="all-noti-tab" role="tabpanel">
                                        <div data-simplebar style="max-height: 300px;" class="pe-2">
                                            <div class="text-reset notification-item d-block dropdown-item position-relative">
                                                <div class="d-flex">
                                                    <div class="avatar-xs me-3 flex-shrink-0">
                                                        <span class="avatar-title bg-info-subtle text-info rounded-circle fs-16">
                                                            <i class="bx bx-badge-check"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="#!" class="stretched-link">
                                                            <h6 class="mt-0 mb-2 lh-base">Your request has been approved</h6>
                                                        </a>
                                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> 2 min ago</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-reset notification-item d-block dropdown-item position-relative">
                                                <div class="d-flex">
                                                    <div class="avatar-xs me-3 flex-shrink-0">
                                                        <span class="avatar-title bg-warning-subtle text-warning rounded-circle fs-16">
                                                            <i class="bx bx-message-square-dots"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="#!" class="stretched-link">
                                                            <h6 class="mt-0 mb-2 lh-base">New document uploaded</h6>
                                                        </a>
                                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> 1 hour ago</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-reset notification-item d-block dropdown-item position-relative">
                                                <div class="d-flex">
                                                    <div class="avatar-xs me-3 flex-shrink-0">
                                                        <span class="avatar-title bg-danger-subtle text-danger rounded-circle fs-16">
                                                            <i class="bx bx-error-circle"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="#!" class="stretched-link">
                                                            <h6 class="mt-0 mb-2 lh-base">Document expiring soon</h6>
                                                        </a>
                                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> 3 hours ago</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown topbar-head-dropdown ms-1 header-item" id="messagesDropdown">
                            <button type="button" class="btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle" id="page-header-messages-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                                <i class='bx bx-message-square-dots fs-22'></i>
                                <span class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-success">5<span class="visually-hidden">unread messages</span></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-messages-dropdown">
                                <div class="dropdown-head bg-pattern rounded-top" style="background-color: #800000;">
                                    <div class="p-3">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-0 fs-16 fw-semibold text-white"> Messages </h6>
                                            </div>
                                            <div class="col-auto dropdown-tabs">
                                                <span class="badge bg-light text-body fs-13"> 5 New</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-content position-relative" id="messageItemsTabContent">
                                    <div class="tab-pane fade show active py-2 ps-2" id="all-messages-tab" role="tabpanel">
                                        <div data-simplebar style="max-height: 300px;" class="pe-2">
                                            <div class="text-reset notification-item d-block dropdown-item">
                                                <div class="d-flex">
                                                    <img src="{{asset('assets/images/marsu-logo.png')}}" class="me-3 rounded-circle avatar-xs flex-shrink-0" alt="user-pic">
                                                    <div class="flex-grow-1">
                                                        <a href="#!" class="stretched-link">
                                                            <h6 class="mt-0 mb-1 fs-13 fw-semibold">John Doe</h6>
                                                        </a>
                                                        <div class="fs-13 text-muted">
                                                            <p class="mb-1">Your document has been reviewed...</p>
                                                        </div>
                                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> 30 min ago</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-reset notification-item d-block dropdown-item">
                                                <div class="d-flex">
                                                    <img src="{{asset('assets/images/marsu-logo.png')}}" class="me-3 rounded-circle avatar-xs flex-shrink-0" alt="user-pic">
                                                    <div class="flex-grow-1">
                                                        <a href="#!" class="stretched-link">
                                                            <h6 class="mt-0 mb-1 fs-13 fw-semibold">Jane Smith</h6>
                                                        </a>
                                                        <div class="fs-13 text-muted">
                                                            <p class="mb-1">Please check the new requirements...</p>
                                                        </div>
                                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> 1 hour ago</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        <div class="dropdown ms-sm-3 header-item topbar-user">
                            <button type="button" class="btn material-shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle header-profile-user" src="{{asset(auth()->user()->avatar)}}" onerror="this.src='{{url('assets/images/marsu-logo.png')}}';" alt="Header Avatar">
                                    <span class="text-start ms-xl-2">
                                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{ current(explode(' ',auth()->user()->name)) }}</span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <h6 class="dropdown-header">Welcome {{current(explode(' ',auth()->user()->name))}}!</h6>
                                <div class="dropdown-divider"></div>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="logout(); show();"> 
                                    <i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> 
                                    <span class="align-middle" data-key="t-logout">Logout</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{url('/')}}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{asset('assets/images/marsu-logo.png')}}" alt="" height="50">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('assets/images/marsu-logo.png')}}" alt="" height="55">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">
                    <div id="two-column-menu"></div>
                <ul class="navbar-nav" id="navbar-nav">
                    <li class="menu-title"><span>&emsp;Assets Management System</span></li>
                    <li class="menu-title"><span>Menu</span></li>

                    <ul class="navbar-nav" id="navbar-nav">

                        <!-- Dashboard -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{url('/')}}">
                                <i class="ri-dashboard-2-line"></i> 
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <!-- Assets Section -->
                        {{-- <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarAssets" data-bs-toggle="collapse">
                                <i class="ri-book-line"></i>
                                <span>Assets</span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarAssets">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item"><a href="/hardware" class="nav-link">List All</a></li>
                                    <li class="nav-item"><a href="/hardware?status=Deployed" class="nav-link">Deployed</a></li>
                                    <li class="nav-item"><a href="/hardware?status=RTD" class="nav-link">Ready to Deploy</a></li>
                                    <li class="nav-item"><a href="/hardware?status=Pending" class="nav-link">Pending</a></li>
                                    <li class="nav-item"><a href="/hardware?status=Undeployable" class="nav-link">Undeployable</a></li>
                                    <li class="nav-item"><a href="/hardware?status=byod" class="nav-link">BYOD</a></li>
                                    <li class="nav-item"><a href="/hardware?status=Archived" class="nav-link">Archived</a></li>
                                    <li class="nav-item"><a href="/hardware?status=Requestable" class="nav-link">Requestable</a></li>
                                    <li class="nav-item"><a href="/hardware/audit/due" class="nav-link">Audit Due</a></li>
                                    <li class="nav-item"><a href="/hardware/checkins/due" class="nav-link">Checkin Due</a></li>
                                    <li class="nav-item"><a href="/hardware/quickscancheckin" class="nav-link">Quickscan Checkin</a></li>
                                    <li class="nav-item"><a href="/hardware/bulkcheckout" class="nav-link">Bulk Checkout</a></li>
                                    <li class="nav-item"><a href="/hardware/requested" class="nav-link">Requested</a></li>
                                    <li class="nav-item"><a href="/hardware?status=Deleted" class="nav-link">Deleted</a></li>
                                    <li class="nav-item"><a href="/maintenances" class="nav-link">Maintenances</a></li>
                                    <li class="nav-item"><a href="/hardware/history" class="nav-link">Import History</a></li>
                                    <li class="nav-item"><a href="/hardware/bulkaudit" class="nav-link">Bulk Audit</a></li>
                                </ul>
                            </div>
                        </li> --}}

                        <!-- Licenses -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{url('/license')}}">
                                <i class="ri-file-text-line"></i>
                                <span>Licenses</span>
                            </a>
                        </li>

                        <!-- Accessories -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="/accessories">
                                <i class="ri-plug-line"></i>
                                <span>Accessories</span>
                            </a>
                        </li>

                        <!-- Consumables -->
                        {{-- <li class="nav-item">
                            <a class="nav-link menu-link" href="/consumables">
                                <i class="ri-inbox-line"></i>
                                <span>Consumables</span>
                            </a>
                        </li> --}}

                        <!-- Components -->
                        {{-- <li class="nav-item">
                            <a class="nav-link menu-link" href="/components">
                                <i class="ri-cpu-line"></i>
                                <span>Components</span>
                            </a>
                        </li> --}}
                        
                        <!-- Predefined Kits -->
                        {{-- <li class="nav-item">
                            <a class="nav-link menu-link" href="/kits">
                                <i class="ri-stack-line"></i>
                                <span>Predefined Kits</span>
                            </a>
                        </li> --}}

                        <!-- People/Users -->
                        {{-- <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarUsers" data-bs-toggle="collapse">
                                <i class="ri-team-line"></i>
                                <span>People</span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarUsers">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item"><a href="/users" class="nav-link">List All</a></li>
                                    <li class="nav-item"><a href="/users?superadmins=true" class="nav-link">Show Superadmins</a></li>
                                    <li class="nav-item"><a href="/users?admins=true" class="nav-link">Show Admins</a></li>
                                    <li class="nav-item"><a href="/users?status=deleted" class="nav-link">Deleted Users</a></li>
                                    <li class="nav-item"><a href="/users?activated=1" class="nav-link">Login Enabled</a></li>
                                    <li class="nav-item"><a href="/users?activated=0" class="nav-link">Login Disabled</a></li>
                                </ul>
                            </div>
                        </li> --}}

                        <!-- Import -->
                        {{-- <li class="nav-item">
                            <a class="nav-link menu-link" href="/imports">
                                <i class="ri-upload-cloud-line"></i>
                                <span>Import</span>
                            </a>
                        </li> --}}

                        <!-- Settings Section -->
                        {{-- <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarSettings" data-bs-toggle="collapse">
                                <i class="ri-settings-3-line"></i>
                                <span>Settings</span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarSettings">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item"><a href="/fields" class="nav-link">Custom Fields</a></li>
                                    <li class="nav-item"><a href="/statuslabels" class="nav-link">Status Labels</a></li>
                                    <li class="nav-item"><a href="/models" class="nav-link">Asset Models</a></li>
                                    <li class="nav-item"><a href="/categories" class="nav-link">Categories</a></li>
                                    <li class="nav-item"><a href="/manufacturers" class="nav-link">Manufacturers</a></li>
                                    <li class="nav-item"><a href="/suppliers" class="nav-link">Suppliers</a></li>
                                    <li class="nav-item"><a href="/departments" class="nav-link">Departments</a></li>
                                    <li class="nav-item"><a href="/locations" class="nav-link">Locations</a></li>
                                    <li class="nav-item"><a href="/companies" class="nav-link">Companies</a></li>
                                    <li class="nav-item"><a href="/depreciations" class="nav-link">Depreciation</a></li>
                                </ul>
                            </div>
                        </li> --}}

                        <!-- Reports Section -->
                        {{-- <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarReports" data-bs-toggle="collapse">
                                <i class="ri-file-chart-line"></i>
                                <span>Reports</span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarReports">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item"><a href="/reports/activity" class="nav-link">Activity Report</a></li>
                                    <li class="nav-item"><a href="/reports/custom" class="nav-link">Custom Report</a></li>
                                    <li class="nav-item"><a href="/reports/audit" class="nav-link">Audit Report</a></li>
                                    <li class="nav-item"><a href="/reports/depreciation" class="nav-link">Depreciation Report</a></li>
                                    <li class="nav-item"><a href="/reports/licenses" class="nav-link">License Report</a></li>
                                    <li class="nav-item"><a href="/reports/maintenances" class="nav-link">Asset Maintenance Report</a></li>
                                    <li class="nav-item"><a href="/reports/unaccepted_assets" class="nav-link">Unaccepted Asset Report</a></li>
                                    <li class="nav-item"><a href="/reports/accessories" class="nav-link">Accessory Report</a></li>
                                </ul>
                            </div>
                        </li> --}}

                        <!-- Requestable Items -->
                        {{-- <li class="nav-item">
                            <a class="nav-link menu-link" href="/account/requestable-assets">
                                <i class="ri-shopping-cart-line"></i>
                                <span>Requestable Items</span>
                            </a>
                        </li> --}}
                    </ul>

            
           
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>
        
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row"></div>
                    @yield('content')
                </div>
            </div>
        
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            {{date('Y')}} © LiMS
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by <span>.<</span>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <!-- Theme Settings -->
    {{-- @include('layouts.change_password') --}}
    {{-- @include('sweetalert::alert') --}}
    
    <!-- JAVASCRIPT -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="{{asset('/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('/assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('/assets/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('/assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
    <script src="{{asset('/assets/js/plugins.js')}}"></script>
    <script src="{{ asset('login_css/js/plugins/dataTables/datatables.min.js')}}"></script>
    <script src="{{ asset('login_css/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{ asset('login_css/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{ asset('login_css/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

    <script src="{{ asset('login_css/js/inspinia.js')}}"></script>
    <script src="{{ asset('login_css/js/plugins/pace/pace.min.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>


    @yield('js')
    
    <!-- App js -->
    <script src="{{asset('/assets/js/app.js')}}"></script>

    <script>
        function show() {
            document.getElementById("loader").style.display = "block";
        }
        
        function logout() {
            event.preventDefault();
            document.getElementById('logout-form').submit();
        }
    </script>
    
    <script>
        window.addEventListener('load', function() {
            document.getElementById('loader').style.display = 'none';
        });
    </script>
    
</body>
</html>
