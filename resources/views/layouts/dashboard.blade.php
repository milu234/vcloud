
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/dashboard/1-4-4/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/dashboard/1-4-4/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/dashboard/1-4-4/css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/dashboard/1-4-4/css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/dashboard/1-4-4/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/dashboard/1-4-4/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/dashboard/1-4-4/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="https://d19m59y37dris4.cloudfront.net/dashboard/1-4-4/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
        <style>
            .dash{
                color:#24b3ab;
            }
            .box1{
                width:25%;
                height:150px;
                background:#3598dc;
                padding:20px;
                margin-top:100px;
                margin-left:80px;
                color:white;
                font-size:25px;
                
            }
            .box2{
                width:25%;
                height:150px;
                background:#e7505a;
                margin-top:100px;
                padding:20px;
                margin-left:30px;
                color:white;
                font-size:25px;
            }
            .box3{
                width:25%;
                height:150px;
                background:#8e44ad;
                margin-top:100px;
                padding:20px;
                margin-left:30px;
                color:white;
                font-size:25px;
            }
            .pull-left{
                float:left;
                
            }
            .counter{
                font-size:30px;
            }
            .images-wala{
                margin-top:100px;
                margin-left:60px;
              }
                .card{
                    margin-top:90px;
                    margin-bottom:0px;
                    box-shadow:1px -9px 40px -12px rgba(0,0,0,0.75);
                }
                .card-body{
                    padding:20px;
                  
                }
                .card-header{
                    background:#24b3ab;
                    color:white;
                    font-size:25px;
                }
                .new{
                    background:#24b3ab;
                    color:white;
                }
                .images-wala{
                margin-top:110px;
                margin-left:60px;
              }
                .card{
                    margin-top:90px;
                    margin-bottom:0px;
                    box-shadow:1px -9px 40px -12px rgba(0,0,0,0.75);
                }
                .card-body{
                    padding:20px;
                  
                }
                .card-header{
                    background:#24b3ab;
                    color:white;
                    font-size:25px;
                }
                .new{
                    background:#24b3ab;
                    color:white;
                    font-size:20px;
                    font-weight:bold;
                    padding:10px;
                    margin-left:4%;
                    margin-top:20px;
                }
                .add{
                    background:#24b3ab;
                    color:white;
                    padding:20px;
                    padding-left:50px;
                }
                .check{
                    background:#fc3;
                    height:20px;
                    width:100px;
                    color:white;
                    cursor:pointer;
                }
                .others{
                    background:lightgreen;
                    height:30px;
                    width:80px;
                    color:white;
                    cursor:pointer;
                    
                }
                .teachers{
                    background:lightblue;
                    height:30px;
                    width:80px;
                    color:white;
                    cursor:pointer;
                }
                .table{
                    margin-bottom:80px;
                }
        </style>
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img src="{{ URL::to('/img/logos.png') }}" height=500px width=500px alt="person" class="img"/>
            <h2 class="h5">acloud</h2><span>Asset Management</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center dash"> <strong>A</strong><strong class="dash">C</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Main</h5>
          @yield('Features')
              
        </div>
        <div class="admin-menu">
          <h5 class="sidenav-heading"></h5>
          
        </div>
      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="{{ URL('/dash') }}"    " class="navbar-brand">
              <div class="brand-text d-none d-md-inline-block"><strong class="dash">@yield('dashboard_name')</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Notifications dropdown-->
                <!-- Log out-->
                <li class="nav-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><img src="{{ URL::to('/img/user.png') }}" height=20px width=20px alt="person" class="img"/><span class="d-none d-sm-inline-block">User</span></a>
                    <ul aria-labelledby="languages" class="dropdown-menu">
                      <li> <a id="navbarDropdown" class=" dropdown-item nav-link  " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a></li>
                        <li ><a  class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                         </a></li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </ul>
                  </li>

                  
                {{-- <li class="">
                    <a id="navbarDropdown" class=" dropdown-item nav-link  " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    
                        
                        <li ><a  class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                         </a></li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    
                </li> --}}
              </ul>
            </div>
          </div>
        </nav>
            {{-- <style>
             
            </style> --}}
      </header>
      <!-- Counts Section -->
      <div class="main-body">
      <div class="container">
            @yield('personal')
            @yield('staff')
            @yield('card')
    
    </div>
<script>
    // @('.counter').counterUp({
    //     delay: 10,
    //     time: 1000
    // });
    // (function(e){"use strict";e.fn.counterUp=function(t){var n=e.extend({time:400,delay:10},t);return this.each(function(){var t=e(this),r=n,i=function(){var e=[],n=r.time/r.delay,i=t.text(),s=/[0-9]+,[0-9]+/.test(i);i=i.replace(/,/g,"");var o=/^[0-9]+$/.test(i),u=/^[0-9]+\.[0-9]+$/.test(i),a=u?(i.split(".")[1]||[]).length:0;for(var f=n;f>=1;f--){var l=parseInt(i/n*f);u&&(l=parseFloat(i/n*f).toFixed(a));if(s)while(/(\d+)(\d{3})/.test(l.toString()))l=l.toString().replace(/(\d+)(\d{3})/,"$1,$2");e.unshift(l)}t.data("counterup-nums",e);t.text("0");var c=function(){t.text(t.data("counterup-nums").shift());if(t.data("counterup-nums").length)setTimeout(t.data("counterup-func"),r.delay);else{delete t.data("counterup-nums");t.data("counterup-nums",null);t.data("counterup-func",null)}};t.data("counterup-func",c);setTimeout(t.data("counterup-func"),r.delay)};t.waypoint(i,{offset:"100%",triggerOnce:!0})})}})(jQuery);
</script>
<script src="{{ URL::asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ URL::asset('vendor/popper.js/umd/popper.min.js') }}"></script>
<script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('js/grasp_mobile_progress_circle-1.0.0.min.js') }}"></script>
<script src="{{ URL::asset('vendor/jquery.cookie/jquery.cookie.js') }}"></script>
<script src="{{ URL::asset('vendor/chart.js/Chart.min.js') }}"></script>
<script src="{{ URL::asset('vendor/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ URL::asset('vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<!-- Main File-->
<script src="{{ URL::asset('js/front.js') }}"></script>

  </body>
</html>

