<!DOCTYPE html>
<html class="transition-navbar-scroll top-navbar-xlarge bottom-footer" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/backendn/assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('assets/backendn/assets/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Ads Click Admin
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{asset('assets/backendn/assets/css/material-dashboard.css?v=2.1.2')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('assets/backendn/assets/demo/demo.css" rel="stylesheet')}}" />
    <link href="{{asset('assets/backendn/assets/css/my.css" rel="stylesheet')}}" />
    @include('layouts.backEndstylesheets')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.com/libraries/Chart.js"></script>

    <style>
        #accordion .card-collapse{
            margin: 5px !important;
            border-radius: 0 !important;
        }

        #accordion .card-collapse a{
            font-weight: 500 !important;
            /* color: blueviolet !important; */
            text-align: center;
        }

        #accordion .card-collapse a:hover{
            color: brown !important;
        }
    </style>

</head>

<body class="" onload="getNotifications()">


    {{-- <--?php  $access_level = Auth::user()->access_level ?> --}}

    {{-- @if($access_level == 'super_user') --}}
    @include('layouts.left-menu')

    {{-- @elseif($access_level == 'call_center_agent' || $access_level == 'field_executive') --}}
    {{-- @include('admin/layouts/access/call_center') --}}




    {{-- @endif --}}

    <!-- Header-->
    <div class="main-panel">
        @include('layouts.top-menu')


        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">

            </div>
        </footer>
    </div>
    </div>
    <div class="fixed-plugin">
        <div class="dropdown show-dropdown">
            <a href="#" data-toggle="dropdown">
                <i class="fa fa-cog fa-2x"></i>
            </a>
            <ul class="dropdown-menu">
                <li class="header-title">Bookmarks</li>
                <li class="adjustments-line">

                </li>
                <li class="header-title">NOTIFY</li>
                {{-- <li class="active">
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="{{asset('assets/backendn/assets/img/sidebar-1.jpg')}}" alt="">
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="{{asset('assets/backendn/assets/img/sidebar-2.jpg')}}" alt="">
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="{{asset('assets/backendn/assets/img/sidebar-3.jpg')}}" alt="">
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="{{asset('assets/backendn/assets/img/sidebar-4.jpg')}}" alt="">
                    </a>
                </li> --}}
                <li class="button-container">
                    <a href=""
                        class="btn btn-primary btn-block" >Publisher Requests</a>
                </li>
                <li class="button-container">
                    <a href="" target="_blank"
                        class="btn btn-primary btn-block">Advertiser Requests</a>
                </li>
                <li class="button-container">
                    <a href="" target="_blank"
                        class="btn btn-primary btn-block">Package Request</a>
                </li>
                 {{-- <li class="header-title">Want more components?</li> --}}
        {{-- <li class="button-container">
            <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">
              Get the pro version
            </a>
        </li> --}}
                {{-- <li class="button-container">
                    <a href="https://demos.creative-tim.com/material-dashboard/docs/2.1/getting-started/introduction.html"
                        target="_blank" class="btn btn-default btn-block">
                        View Documentation
                    </a>
                </li>
                <li class="button-container github-star">
                    <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard"
                        data-icon="octicon-star" data-size="large" data-show-count="true"
                        aria-label="Star ntkme/github-buttons on GitHub">Star</a>
                </li>
                <li class="header-title">Thank you for 95 shares!</li>
                <li class="button-container text-center">
                    <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot;
                        45</button>
                    <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot;
                        50</button>
                    <br>
                    <br>
                </li> --}}
            </ul>
        </div>
    </div>

    @include('layouts.backEndjavascript')
    @yield('scripts')

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        function getNotifications(){
             $.ajax({
                type: 'GET',
                url: '{{('/notifications')}}',

                success: function(data){
                    // console.log(data[0]);
                    document.getElementById("total_notification").innerHTML = data[0];
                    document.getElementById("publisher_notification").innerHTML = data[2];
                    document.getElementById("advertier_notification").innerHTML = data[1];
                    document.getElementById("package_notification").innerHTML = data[3];



                }
            })
        }

    </script>
</body>

</html>
