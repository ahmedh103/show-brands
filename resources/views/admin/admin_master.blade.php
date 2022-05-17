<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description"
        content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">

    <title>Easy - Admin Dashboard </title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
        rel="stylesheet" />

    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('backend/assets/plugins/simplebar/simplebar.css') }}" rel="stylesheet" />
    <link href="  {{ asset('backend/assets/plugins/nprogress/nprogress.css') }}" rel="stylesheet" />

    <!-- No Extra plugin used -->
    <link href='  {{ asset('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}' rel='stylesheet'>
    <link href='  {{ asset('backend/assets/plugins/daterangepicker/daterangepicker.css') }}' rel='stylesheet'>


    <link href='{{ asset('backend/assets/plugins/toastr/toastr.min.css') }}' rel='stylesheet'>


    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">




    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="  {{ asset('backend/assets/css/sleek.css') }}" />

    <!-- FAVICON -->
    <link href="   {{ asset('backend/assets/img/favicon.png') }}" rel="shortcut icon" />

    <!--
      HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <script src="   {{ asset('backend/assets/plugins/nprogress/nprogress.js') }}"></script>
</head>

<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
    <script>
        NProgress.configure({
            showSpinner: false
        });
        NProgress.start();
    </script>

    <div id="toaster"></div>

    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">

        <!-- Github Link -->
        <a href="https://github.com/tafcoder/sleek-dashboard" target="_blank" class="github-link">
            <svg width="70" height="70" viewBox="0 0 250 250" aria-hidden="true">
                <defs>
                    <linearGradient id="grad1" x1="0%" y1="75%" x2="100%" y2="0%">
                        <stop offset="0%" style="stop-color:#896def;stop-opacity:1" />
                        <stop offset="100%" style="stop-color:#482271;stop-opacity:1" />
                    </linearGradient>
                </defs>
                <path d="M 0,0 L115,115 L115,115 L142,142 L250,250 L250,0 Z" fill="url(#grad1)"></path>
            </svg>
            <i class="mdi mdi-github-circle"></i>
        </a>




        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        @include('admin.body.sidebar')


        <!-- ====================================
        ——— PAGE WRAPPER
        ===================================== -->
        <div class="page-wrapper">

            <!-- Header -->
            <header class="main-header " id="header">
                <nav class="navbar navbar-static-top navbar-expand-lg">
                    <!-- Sidebar toggle button -->
                    <button id="sidebar-toggler" class="sidebar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                    </button>
                    <!-- search form -->
                    <div class="search-form d-none d-lg-inline-block">
                        <div class="input-group">
                            <button type="button" name="search" id="search-btn" class="btn btn-flat">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <input type="text" name="query" id="search-input" class="form-control"
                                placeholder="'button', 'chart' etc." autofocus autocomplete="off" />
                        </div>
                        <div id="search-results-container">
                            <ul id="search-results"></ul>
                        </div>
                    </div>

                    <div class="navbar-right ">
                        <ul class="nav navbar-nav">
                            <li class="dropdown notifications-menu custom-dropdown">


                          

                                <ul class="dropdown-menu dropdown-menu-right d-none">
                                    <li class="dropdown-header">You have 5 notifications</li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-account-plus"></i> New user registered
                                            <span class=" font-size-12 d-inline-block float-right"><i
                                                    class="mdi mdi-clock-outline"></i> 10 AM</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-account-remove"></i> User deleted
                                            <span class=" font-size-12 d-inline-block float-right"><i
                                                    class="mdi mdi-clock-outline"></i> 07 AM</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-chart-areaspline"></i> Sales report is ready
                                            <span class=" font-size-12 d-inline-block float-right"><i
                                                    class="mdi mdi-clock-outline"></i> 12 PM</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-account-supervisor"></i> New client
                                            <span class=" font-size-12 d-inline-block float-right"><i
                                                    class="mdi mdi-clock-outline"></i> 10 AM</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-server-network-off"></i> Server overloaded
                                            <span class=" font-size-12 d-inline-block float-right"><i
                                                    class="mdi mdi-clock-outline"></i> 05 AM</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-footer">
                                        <a class="text-center" href="#"> View All </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="right-sidebar-in right-sidebar-2-menu">
                                <i class="mdi mdi-settings mdi-spin"></i>
                            </li>
                            <!-- User Account -->
                            <li class="dropdown user-menu">
                                <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <img src="{{ Auth::user()->profile_photo_url }}" class="user-image"
                                        alt="User Image" />
                                    <span class="d-none d-lg-inline-block"> {{ Auth::user()->name }}</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <!-- User image -->
                                    <li class="dropdown-header">
                                        <img src="{{ Auth::user()->profile_photo_url }}" class="img-circle"
                                            alt="User Image" />
                                        <div class="d-inline-block">
                                            {{ Auth::user()->name }} <small class="pt-1">
                                                {{ Auth::user()->email }}</small>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="{{ route('profile.update') }}">
                                            <i class="mdi mdi-account"></i> My Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('change.password') }}">
                                            <i class="mdi mdi-email"></i> Change Password
                                        </a>
                                    </li>
                                    {{-- <li>
                                        <a href="#"> <i class="mdi mdi-diamond-stone"></i> Projects </a>
                                    </li>
                                    <li class="right-sidebar-in">
                                        <a href="javascript:0"> <i class="mdi mdi-settings"></i> Setting </a>
                                    </li> --}}

                                    <li class="dropdown-footer">
                                        <a href="{{ route('user.logout') }}"> <i class="mdi mdi-logout"></i> Log Out
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>


            <!-- ====================================
          ——— CONTENT WRAPPER
          ===================================== -->

            <div class="content-wrapper">
                <div class="content">








                    @yield('admin')



                </div> <!-- End Content -->
            </div> <!-- End Content Wrapper -->


            <!-- Footer -->
            <footer class="footer mt-auto">
                <div class="copyright bg-white">
                    <p>
                        &copy; <span id="copy-year"></span> Copyright Sleek Dashboard Bootstrap Template by <a
                            class="text-primary" href="http://www.iamabdus.com/" target="_blank">Abdus</a>.
                    </p>
                </div>
                <script>
                    var d = new Date();
                    var year = d.getFullYear();
                    document.getElementById("copy-year").innerHTML = year;
                </script>
            </footer>

        </div> <!-- End Page Wrapper -->
    </div> <!-- End Wrapper -->


    <!-- <script type="module">
        import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate';

        const el = document.createElement('pwa-update');
        document.body.appendChild(el);
    </script> -->

    <!-- Javascript -->

    <script src="{{ asset('backend/assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/simplebar/simplebar.min.js') }}"></script>

    <script src='{{ asset('backend/assets/plugins/charts/Chart.min.js') }}'></script>
    <script src='{{ asset('backend/assets/js/chart.js') }}'></script>




    <script src='{{ asset('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}'></script>
    <script src='{{ asset('backend/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js') }}'></script>
    <script src='{{ asset('backend/assets/js/vector-map.js') }}'></script>

    <script src='{{ asset('backend/assets/plugins/daterangepicker/moment.min.js') }}'></script>
    <script src='{{ asset('backend/assets/plugins/daterangepicker/daterangepicker.js') }}'></script>
    <script src='{{ asset('backend/assets/js/date-range.js') }}'></script>








    <script src='{{ asset('backend/assets/plugins/toastr/toastr.min.js') }}'></script>
    <script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js'></script>

    <script>
        @if (Session::has('message'))
            var type ="{{ Session::get('alert-type', 'info') }}"
            switch(type){
            case 'info':
            toaster.info("{{ Session::get('message') }}");
            break;
            case 'success':
            toaster.success("{{ Session::get('message') }}");
            break;
            case 'warning':
            toaster.warning("{{ Session::get('message') }}");
            break;
            case 'error':
            toaster.error("{{ Session::get('message') }}");
            break;
            }
        @endif
    </script>










    <script src="{{ asset('backend/assets/js/sleek.js') }}"></script>
    <link href="{{ asset('backend/assets/options/optionswitch.css') }}" rel="stylesheet">
    <script src="{{ asset('backend/assets/options/optionswitcher.js') }}"></script>
</body>

</html>
