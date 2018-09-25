
@extends('layouts.app')

@section('content')

<div class="container">
    <a class="btn btn-primary" href="/lab_as">Back To Home</a>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="padding:25px;">
            <div class="card-header" style="background:#24b3ab;">Create Request</div>
            {!! Form::open(['action' => 'LabController@store','method' =>'POST']) !!}
                <div class='form-group' style="margin-top:20px">
                    {{Form::label('item_name' , 'Item name')}}
                    {{Form::text('item_name','',['class'=>'form-control','placeholder'=>'Item Name'])}}
                </div>
                <div class='form-group'>
                    {{Form::label('item_count' , 'Count')}}
                    {{Form::number('item_count',0,['class'=>'form-control','placeholder'=>'Count of Item'])}}
                </div>
                {{Form::submit('Place Order',['class'=> 'btn btn-primary'])}}
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection







{{-- @extends('layouts.dashboard')


@section('Features')
<ul id="side-main-menu" class="side-menu list-unstyled">                  
    <li><a href=""> Staff Request</a></li>
    <li><a href="#"> </a></li>
  </ul>

@endsection

@section('funtions')


<div class="container">
                {!! Form::open(['action' => 'LabController@store','method' =>'POST']) !!}
                    <div class='form-group'>
                        {{Form::label('item_name' , 'Item name')}}
                        {{Form::text('item_name','',['class'=>'form-control','placeholder'=>'Item Name'])}}
                    </div>
                    <div class='form-group'>
                        {{Form::label('item_count' , 'Count')}}
                        {{Form::number('item_count',0,['class'=>'form-control','placeholder'=>'Count of Item'])}}
                    </div>
                    {{Form::submit('Place Order',['class'=> 'btn btn-primary'])}}
                {!! Form::close() !!}
    </div>
    
@endsection --}}