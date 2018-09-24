
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add User</title>
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
            /* .hh{
              box-shadow:-1px 9px 40px -12px rgba(0,0,0,0.75); 
            } */
            
        </style>
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center hh"><img src="{{ URL::to('/img/logos.png') }}" height=500px width=500px alt="person" class="img"/>
            <h2 class="h5">acloud</h2><span>Asset Management</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center dash"> <strong>A</strong><strong class="dash">C</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
          <li><a href="{{route('Logged.admin')}}"> <i class="icon-home"></i>Home</a></li>
            <li><a href="{{route('manage_user')}}"> <i class="icon-form"></i>Manage User</a></li>
            
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
                <li class="nav-item"><a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                 </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                 </form></li>
              </ul>
            </div>
          </div>
        </nav>
            <style>
              .images-wala{
                margin-top:110px;
                margin-left:60px;
              }
                .card{
                    margin-top:40px;
                    margin-bottom:0px;
                    margin-left:35px;
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
                    margin-left:45%;
                    width:100px;
                }
                .add{
                    background:#24b3ab;
                    color:white;
                    padding:20px;
                    padding-left:50px;
                }
                .user-add{
                    background:#24b3ab;
                    color:white;
                    padding:10px;
                    margin-left:40px;
                    height:45px;
                    width:130px;
                    margin-top:20px;
                }

            </style>
      </header>
      <!-- Counts Section -->
      
           <h1 class="add">Home</h1>
           <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add User +') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ action('LoginController@adminStore') }}">
                      
                    <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label text-center">{{ __('Full Name') }}</label>

                            <div class="col-md-6">
                                <input name="name" id="name" type="text" class="form-control">

                
                            </div>
                    </div>
                    <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label text-center">{{ __('Email') }}</label>

                            <div class="col-md-4">
                                <input id="name" name="email" type="text" class="form-control">

                
                            </div>
                    </div>
                    <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label text-center">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="name" name="password" type="password" class="form-control">

                
                            </div>
                    </div>
                    <div class="form-group row">
                        <label for="branches" class="col-sm-4 col-form-label text-center">Branches</label>
                        <div class="col-md-6">
                            <select class="form-control" id="branch-select" name="dept_id" data-parsley-required="true">
                                @foreach ($drop_down_fetched_from_DB1 as $data) 
                                {
                                  <option class="dropdown" value="{{ $data }}">{{ $data }}</option>
                                }
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="role" class="col-sm-4 col-form-label text-center">Role</label>
                        <div class="col-md-6">
                            <select class="form-control" id="role" name="role_id" data-parsley-required="true">
                                @foreach ($drop_down_fetched_from_DB2 as $data) 
                                {
                                  <option class="dropdown" value="{{ $data }}">{{ $data }}</option>
                                }
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                        <button type="submit" class="btn btn-primary new">
                                    {{ __('Save') }}
                                </button>

                        
                        
                    </form>
                
            </div>
          </div>
        </div>
      
<!-- <script>
    @('.counter').counterUp({
        delay: 10,
        time: 1000
    });
    (function(e){"use strict";e.fn.counterUp=function(t){var n=e.extend({time:400,delay:10},t);return this.each(function(){var t=e(this),r=n,i=function(){var e=[],n=r.time/r.delay,i=t.text(),s=/[0-9]+,[0-9]+/.test(i);i=i.replace(/,/g,"");var o=/^[0-9]+$/.test(i),u=/^[0-9]+\.[0-9]+$/.test(i),a=u?(i.split(".")[1]||[]).length:0;for(var f=n;f>=1;f--){var l=parseInt(i/n*f);u&&(l=parseFloat(i/n*f).toFixed(a));if(s)while(/(\d+)(\d{3})/.test(l.toString()))l=l.toString().replace(/(\d+)(\d{3})/,"$1,$2");e.unshift(l)}t.data("counterup-nums",e);t.text("0");var c=function(){t.text(t.data("counterup-nums").shift());if(t.data("counterup-nums").length)setTimeout(t.data("counterup-func"),r.delay);else{delete t.data("counterup-nums");t.data("counterup-nums",null);t.data("counterup-func",null)}};t.data("counterup-func",c);setTimeout(t.data("counterup-func"),r.delay)};t.waypoint(i,{offset:"100%",triggerOnce:!0})})}})(jQuery);
</script> -->
  </body>
</html>