
{{-- @extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Principle</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                 
                 
           <p></p>
               
                </div>

            </div>
        </div>
    </div>
</div>
@endsection --}}























@extends('layouts.dashboard')


@section('Features')
<ul id="side-main-menu" class="side-menu list-unstyled">                  
    {{-- <li><a href="{{ route('staffR') }}"> <i class=""></i>Staff Request</a></li>
    <li><a href="{{ route('labR') }}"> <i class=""></i>Lab Request</a></li> --}}
    {{-- <li><a href="#"> <i class=""></i></a></li> --}}
    <li><a href="/req" role="button">View Requests</a></li>
    <li><a role="button" href="/labs" >View Records</a></li>
    {{-- <li><a href="#"> <i class=""></i></a></li> --}}
    {{-- <li><a href="#"> <i class=""></i></a></li> --}}
    {{-- <li><a href="login.html"> <i class=""></i></a></li> --}}
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
