<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>@yield('title','Admin CMS-Caboose Lake')</title>

    {{ HTML::style('assets/dashboard/plugins/jquery-polymaps/style.css') }}
    {{ HTML::style('assets/dashboard/plugins/jquery-metrojs/MetroJs.css') }}
    {{ HTML::style('assets/dashboard/plugins/shape-hover/css/demo.css') }}
    {{ HTML::style('assets/dashboard/plugins/shape-hover/css/component.css') }}
    {{ HTML::style('assets/dashboard/plugins/owl-carousel/owl.carousel.css') }}
    {{ HTML::style('assets/dashboard/plugins/owl-carousel/owl.theme.css') }}
    {{ HTML::style('assets/dashboard/plugins/pace/pace-theme-flash.css') }}
    {{ HTML::style('assets/dashboard/plugins/jquery-slider/css/jquery.sidr.light.css') }}
    {{ HTML::style('assets/dashboard/plugins/jquery-ricksaw-chart/css/rickshaw.css') }}
    {{ HTML::style('assets/dashboard/plugins/jquery-isotope/isotope.css') }}
    <!-- BEGIN CORE CSS FRAMEWORK -->
    {{ HTML::style('assets/dashboard/plugins/boostrapv3/css/bootstrap.min.css') }}
    {{ HTML::style('assets/dashboard/plugins/boostrapv3/css/bootstrap-theme.min.css') }}
    {{ HTML::style('assets/dashboard/plugins/font-awesome/css/font-awesome.css') }}
    {{ HTML::style('assets/dashboard/css/animate.min.css') }}
    <!-- END CORE CSS FRAMEWORK -->
    <!-- BEGIN CSS TEMPLATE -->
    {{ HTML::style('assets/dashboard/css/style.css') }}
    {{ HTML::style('assets/dashboard/css/responsive.css') }}
    {{ HTML::style('assets/dashboard/css/custom-icon-set.css') }}
    {{ HTML::style('assets/dashboard/css/magic_space.css') }}
    <!-- END CSS TEMPLATE -->
    <!-- BEGIN PLUGIN CSS -->
    {{ HTML::style('assets/dashboard/plugins/bootstrap-select2/select2.css') }}
    {{ HTML::style('assets/dashboard/plugins/jquery-slider/css/jquery.sidr.light.css') }}
    {{ HTML::style('assets/dashboard/plugins/jquery-datatable/css/jquery.dataTables.css') }}
    {{ HTML::style('assets/dashboard/plugins/boostrap-checkbox/css/bootstrap-checkbox.css') }}
    {{ HTML::style('assets/dashboard/plugins/datatables-responsive/css/datatables.responsive.css') }}
    <!-- END PLUGIN CSS -->
</head>

<body>
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse ">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="navbar-inner">
        <div class="header-seperation">
            <ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">
                <li class="dropdown"> <a id="main-menu-toggle" href="#main-menu"  class="" >
                        <div class="iconset top-menu-toggle-white"></div>
                    </a> </li>
            </ul>
            <!-- BEGIN LOGO -->
            <a href="{{ route('CPanel.index') }}">
                <img src="{{ asset('assets/dashboard/img/logo.png') }}" class="logo" alt=""  data-src="{{ asset('assets/dashboard/img/logo.png') }}" data-src-retina="{{ asset('assets/dashboard/img/logo2x.png')}}" width="106" height="21"/>
            </a>
            <!-- END LOGO -->
            <ul class="nav pull-right notifcation-center">
                <li class="dropdown" id="header_task_bar">
                    <a href="{{ route('CPanel.index') }}" class="dropdown-toggle active" data-toggle="">
                        <div class="iconset top-home"></div>
                    </a>
                </li>
            </ul>
        </div>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <div class="header-quick-nav" >
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="pull-left">
                <ul class="nav quick-section">
                    <li class="quicklinks">
                        <a href="#" class="" id="layout-condensed-toggle" >
                            <div class="iconset top-menu-toggle-dark"></div>
                        </a>
                    </li>
                </ul>
                <ul class="nav quick-section">
                    <li class="quicklinks">
                        <a href="#" class="" >
                            <!--<div class="iconset top-reload"></div>-->
                        </a>
                        &nbsp;
                    </li>
                    <li class="quicklinks">
                        <!--<span class="h-seperate"></span>-->
                    </li>
                    <li class="quicklinks">
                        <a href="#" class="" >
                           <!-- <div class="iconset top-tiles"></div>-->
                        </a>
                        &nbsp;
                    </li>
                    <li class="m-r-10 input-prepend inside search-form no-boarder">
                        &nbsp;
                        <span class="add-on">
                            <!--<span class="iconset top-search"></span>-->
                        </span>
                        <!--<input name="" type="text"  class="no-boarder " placeholder="Search Dashboard" style="width:250px;">-->
                    </li>
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
            <!-- BEGIN CHAT TOGGLER -->
            <div class="pull-right">
                <div class="chat-toggler">
                    <a href="#" class="dropdown-toggle" id="my-task-list" data-placement="bottom"  data-content='' data-toggle="" data-original-title="">
                        <div class="user-details">
                            <div class="username">{{ Auth::user()->username }}</div>
                        </div>&nbsp;&nbsp;
                    </a>
                    <div class="profile-pic"> <img src="{{ asset('assets/dashboard/img/profiles/avatar_small.jpg') }}"  alt="" data-src="{{ asset('assets/dashboard/img/profiles/avatar_small.jpg') }}" data-src-retina="{{ asset('assets/dashboard/img/profiles/avatar_small2x.jpg') }}" width="35" height="35" /> </div>
                </div>
                <ul class="nav quick-section ">
                    <li class="quicklinks"> <a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">
                            <div class="iconset top-settings-dark "></div>
                        </a>
                        <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
                            <li><a href="{{ route('logout') }}"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- END CHAT TOGGLER -->
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<!-- BEGIN CONTAINER -->
<div class="page-container row-fluid">
    @include('_layouts/partials/menu')
    <!-- BEGIN PAGE CONTAINER-->
    <div class="page-content">
        <div class="content">
            @yield('content')
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript
================================================== -->

<!-- BEGIN CORE JS FRAMEWORK-->
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="{{ asset('assets/dashboard/plugins/jquery-1.8.3.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/dashboard/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/dashboard/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/dashboard/plugins/breakpoints.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/dashboard/plugins/jquery-unveil/jquery.unveil.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/dashboard/plugins/jquery-block-ui/jqueryblockui.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/dashboard/plugins/jquery-lazyload/jquery.lazyload.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/dashboard/plugins/jquery.cookie.js') }}" type="text/javascript"></script>
<!-- END CORE JS FRAMEWORK -->
<!-- BEGIN PAGE LEVEL JS -->
<script src="{{ asset('assets/dashboard/plugins/jquery-slider/jquery.sidr.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/dashboard/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/dashboard/plugins/pace/pace.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/dashboard/plugins/jquery-numberAnimate/jquery.animateNumbers.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/dashboard/plugins/jquery-ricksaw-chart/js/raphael-min.js') }}"></script>
<script src="{{ asset('assets/dashboard/plugins/jquery-ricksaw-chart/js/d3.v2.js') }}"></script>
<script src="{{ asset('assets/dashboard/plugins/jquery-ricksaw-chart/js/rickshaw.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/plugins/jquery-sparkline/jquery-sparkline.js') }}"></script>
<script src="{{ asset('assets/dashboard/plugins/skycons/skycons.js') }}"></script>
<script src="{{ asset('assets/dashboard/plugins/owl-carousel/owl.carousel.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/dashboard/plugins/jquery-polymaps/polymaps.min.js') }}" type="text/javascript"></script>


<script src="{{ asset('assets/dashboard/plugins/jquery-flot/jquery.flot.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/dashboard/plugins/jquery-flot/jquery.flot.resize.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/dashboard/plugins/jquery-metrojs/MetroJs.min.js') }}" type="text/javascript" ></script>


<script src="{{ asset('assets/dashboard/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/dashboard/plugins/bootstrap-select2/select2.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/dashboard/plugins/jquery-datatable/js/jquery.dataTables.min.js') }}" type="text/javascript" ></script>
<script src="{{ asset('assets/dashboard/plugins/jquery-datatable/extra/js/dataTables.tableTools.min.js') }}" type="text/javascript" ></script>
<script type="text/javascript" src="{{ asset('assets/dashboard/plugins/datatables-responsive/js/datatables.responsive.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/dashboard/plugins/datatables-responsive/js/lodash.min.js') }}"></script>

<script src="{{ asset('assets/dashboard/js/datatables.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN CORE TEMPLATE JS -->
<script src="{{ asset('assets/dashboard/js/core.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/dashboard/js/chat.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/dashboard/js/demo.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/dashboard/js/dashboard_v2.js') }}" type="text/javascript"></script>
<!-- END CORE TEMPLATE JS -->
<script src="{{ asset('assets/dashboard/js/_common.js') }}" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $(".live-tile,.flip-list").liveTile();
    });
</script>
<!-- END CORE TEMPLATE JS -->
</body>
</html>