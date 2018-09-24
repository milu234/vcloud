
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Manage-user</title>
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
            
            
            </ul>
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

            </style>
      </header>
      <h1 class="add">Manage User</h1>
<table class="table table-striped table-hover table-bordered" class="display">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Department ID</th>
            <th>Role ID</th>
            <th></th>
            <th></th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($users_data as $data)
        {
            <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->dept_id}}</td>
                <td>{{$data->role_id}}</td>
                <td><a href="#" class="btn btn-primary">EDIT</a></td>
                <td><a href="#" class="btn btn-danger">DELETE</a></td>
            </tr>
        }
        @endforeach
       
    </tbody>    
    </table>    

  </body>
</html>