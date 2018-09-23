
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
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="#"> <i class="icon-home"></i></a></li>
            <li><a href="#"> <i class="icon-form"></i></a></li>
            <li><a href="#"> <i class="fa fa-bar-chart"></i></a></li>
            <li><a href="#"> <i class="icon-grid"></i></a></li>
            <li><a href="#"> <i class="icon-interface-windows"></i></a>
              <!--<ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
              </ul> -->
            </li>
            <li><a href="login.html"> <i class="icon-interface-windows"></i></a></li>
            <li> <a href="#"> <i class="icon-mail"></i>
                </a></li>
          </ul>
        </div>
        <div class="admin-menu">
          <h5 class="sidenav-heading"></h5>
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
            <li> <a href="#"> <i class="icon-screen"> </i></a></li>
            <li> <a href="#"> <i class="icon-flask"> </i></a></li>
            <li> <a href=""> <i class="icon-flask"> </i></a></li>
            <li> <a href=""> <i class="icon-picture"> </i></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><strong class="dash">Dashboard</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Notifications dropdown-->
                <!-- Log out-->
                <li class="nav-item"><a href="login.html" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
            <style>
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

            </style>
      </header>
      <!-- Counts Section -->
      <div class="main-body">
      <div class="container">
    <div class="row ">
        <div class="col-md-4 images-wala">
          <img src="{{ URL::to('/img/user.png') }}" height=200px width=200px alt="person" class="img"/>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Personal Info') }}</div>

                <div class="card-body">
                    <form method="POST">
                      
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label">{{ __('Full Name :') }}</label>

                            
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label">{{ __('Role :') }}</label>

                            
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label">{{ __('Branch :') }}</label>

                            
                        </div>

                        
                        
                    </form>
                
            </div>
          </div>
        </div>
    
    </div>
</div>
            <div class="box1 pull-left"><h2><span class="counter">1190</span>+</h2>Total Request</div>
            <div class="box2 pull-left"><h2><span class="counter">890</span>+</h2>Current Request</div>
            <div class="box3 pull-left"><h2><span class="counter">460</span>+</h2>Pending Request</div>
    </div>
    </div>
<script>
    @('.counter').counterUp({
        delay: 10,
        time: 1000
    });
    (function(e){"use strict";e.fn.counterUp=function(t){var n=e.extend({time:400,delay:10},t);return this.each(function(){var t=e(this),r=n,i=function(){var e=[],n=r.time/r.delay,i=t.text(),s=/[0-9]+,[0-9]+/.test(i);i=i.replace(/,/g,"");var o=/^[0-9]+$/.test(i),u=/^[0-9]+\.[0-9]+$/.test(i),a=u?(i.split(".")[1]||[]).length:0;for(var f=n;f>=1;f--){var l=parseInt(i/n*f);u&&(l=parseFloat(i/n*f).toFixed(a));if(s)while(/(\d+)(\d{3})/.test(l.toString()))l=l.toString().replace(/(\d+)(\d{3})/,"$1,$2");e.unshift(l)}t.data("counterup-nums",e);t.text("0");var c=function(){t.text(t.data("counterup-nums").shift());if(t.data("counterup-nums").length)setTimeout(t.data("counterup-func"),r.delay);else{delete t.data("counterup-nums");t.data("counterup-nums",null);t.data("counterup-func",null)}};t.data("counterup-func",c);setTimeout(t.data("counterup-func"),r.delay)};t.waypoint(i,{offset:"100%",triggerOnce:!0})})}})(jQuery);
</script>
  </body>
</html>