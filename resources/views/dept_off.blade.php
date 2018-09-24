
@extends('layouts.dashboard')


@section('Features')
<ul id="side-main-menu" class="side-menu list-unstyled">                  
    <li><a href="{{ route('staffR') }}"> <i class=""></i>Staff Request</a></li>
    <li><a href="{{ route('labR') }}"> <i class=""></i>Lab Request</a></li>
    <li><a href="#"> <i class=""></i></a></li>
    <li><a href="#"> <i class=""></i></a></li>
    <li><a href="#"> <i class=""></i></a></li>
    <li><a href="login.html"> <i class=""></i></a></li>
    <li> <a href="#"> <i class=""></i>
        </a></li>
  </ul>

@endsection

@section('funtions')

<div class="staff">

</div>

<div class="lab">

</div>
    
@endsection