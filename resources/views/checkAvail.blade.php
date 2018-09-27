@extends('layouts.dashboard')

@section('staff')
@if(count($data[0]) == 0 and count($data[1]) == 0)
<br><br><h2>Requested Item Not Available</h2>
<td id="check"><a class="btn" style="background:#fc3;color:white;" href="{{ route('staffR') }}">Go Back</a></td>
@else


<h1 class="add">StakeHolder</h1>
    <table class="table table-striped table-hover table-bordered" class="display" id="mydatatable">
            <thead>
                <tr>
                    <th>Staff Name</th>
                    <th>Staff Department</th>
                    <th>Item Name</th>
                    <th>Item In Spare</th>
                    <th  style="width:150px"></th>
                    {{-- <th style="width:190px"></th>
                    <th style="width:200px"></th> --}}
                    
                    
                </tr>
            </thead>
            <tbody>

    @foreach ($data[0] as $item)
<tr>
    <td>{{$item->name}}</td>
    @if($item->dept_id==1)
    <td>Instrumentation</td>
    @elseif($item->dept_id==2)
    <td>Electronics</td>
    @elseif($item->dept_id==3)
    <td>Computer Science</td>
    @elseif($item->dept_id==4)
    <td>Electronics & Telecommunication</td>
    @elseif($item->dept_id==5)
    <td>MCA</td>
    @elseif($item->dept_id==6)
    <td>Information Technology</td>
    @endif
    <td>{{$item->item_name}}</td>
    <td>{{$item->spare}}</td>
    <td id="check"><a class="btn" style="background:#fc3;color:white;" href="/staffR/send_request/{{$data[2]}}/{{$item->id}}">Send Request</a></td>
</tr>  
@endforeach

@foreach ($data[1] as $item)
<tr>
    <td>{{$item->name}}</td>
    @if($item->dept_id==1)
    <td>Instrumentation</td>
    @elseif($item->dept_id==2)
    <td>Electronics</td>
    @elseif($item->dept_id==3)
    <td>Computer Science</td>
    @elseif($item->dept_id==4)
    <td>Electronics & Telecommunication</td>
    @elseif($item->dept_id==5)
    <td>MCA</td>
    @elseif($item->dept_id==6)
    <td>Information Technology</td>
    @endif
    <td>{{$item->item_name}}</td>
    <td>{{$item->spare}}</td>
    <td id="check"><a class="btn" style="background:#fc3;color:white;" href="/staffR/send_request/{{$data[2]}}/{{$item->id}}">Send Request</a></td>
</tr>  
@endforeach



@endif
@stop

@section('dashboard_name')
Staff Request Check Availability
    @stop

    @section('Features')
    <ul id="side-main-menu" class="side-menu list-unstyled">                  
        <li><a href="{{ route('staffR') }}"> <i class=""></i>Back</a></li>
        {{-- <li><a href="{{ route('labR') }}"> <i class=""></i>Lab Request</a></li> --}}
      </ul>
    
    @endsection