@extends('layouts.dashboard')

    @section('staff')
    <h1 class="add">StakeHolder</h1>
    <table class="table table-striped table-hover table-bordered" class="display" id="mydatatable">
            <thead>
                <tr>
                    <th>Staff Name</th>
                    <th>Item Name</th>
                    <th>Item Count</th>
                    <th>Dept Name</th>
                    <th  style="width:150px">Check availability</th>
                    <th style="width:190px">Send Request to Others</th>
                    <th style="width:200px">Send Request to Teachers</th>
                    
                    
                </tr>
            </thead>
            <tbody>
              
                
            }
            .counter{
                font-size:30px;
            }
            
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
            <li><a href="{{ route('staffR') }}"> <i class=""></i>Staff Request</a></li>
            <li><a href="{{ route('labR') }}"> <i class=""></i>Lab Request</a></li>
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
                <li>
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
    
                        
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
    
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        
                    </li>
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
      </header>
      <h1 class="add">StakeHolder</h1>


<table class="table table-striped table-hover table-bordered" class="display" id="mydatatable">
    <thead>
        <tr>
            <th>Staff Name</th>
            <th>Item Name</th>
            <th>Item Count</th>
            <th  style="width:150px"></th>
            <th style="width:190px"></th>
            <th style="width:200px"></th>
            
            
        </tr>
    </thead>
    <tbody>
        {{--<tr>
            <td>Dimple Bhora</td>
            <td>Arduino</td>
            <td>5</td>
            <td>IT</td>
            <td id="check" class="check">Check Availabilaty</td>
            <td id="others" class="others">Request to others</td>
            <td id="teachers" class="teachers">Request to teachers</td>

        </tr>
        <tr>--}}
    
        {{-- <td>Jayashree Hajgude</td>
        <td>Aurdino</td>
        <td>6</td>
        <td>IT</td>
        <td id="check" class="check">Check Availabilaty</td>
        <td id="others" class="others">Request to others</td>
        <td id="teachers" class="teachers">Request to teachers</td>
            
        </tr>  --}}
        
        @foreach ($data as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->item_name}}</td>
            <td>{{$item->item_count}}</td>     
            <td id="check"><a class="btn btn-primary" href="staff/check/{{$item->request_id}}">Check Availabilaty</a></td>
            @if($item->request_type==0)
            <td id="others"><a class="btn btn-success" href="staff/check/{{$item->request_id}}">Request to others</a></td>
            <td id="teachers"><a class="btn btn-danger" href="staff/check/{{$item->request_id}}">Forward request</a></td>
            @endif
        </tr>  
        @endforeach
        
       
    </tbody>    
    </table>    
    
<!-- Modal -->
{{-- <table class="table table-striped table-hover table-bordered" class="display" id="mydatatable">
    <thead>
        <tr>
            <th>Lab No</th>
            <th>Lab Assistant</th>
            <th>Item Name</th>
            <th>Item Count</th>
            <th  style="width:150px">Check availability</th>
            <th style="width:190px">Send Request to Others</th>
            <th style="width:200px">Send Request to Teachers</th>
            
            
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>512</td>
            <td>Nikita</td>
            <td>Accelerometer</td>
            <td>3</td>
            <td id="check" class="check">Check Availabilaty</td>
            <td id="others" class="others">Request to others</td>
            <td id="teachers" class="teachers">Request to teachers</td>

        </tr>
        <tr>
            <td>510</td>
            <td>Sachin</td>
            <td>Flex Potentiometers</td>
            <td>2</td>
            <td id="check" class="check">Check Availabilaty</td>
            <td id="others" class="others">Request to others</td>
            <td id="teachers" class="teachers">Request to teachers</td>
            
        </tr>
       
    </tbody>    
    </table>     --}}
    
