@extends('layouts.dashboard')

@section('staff')<br><br>
<style>
.colorsection{
    background-color: #24B3AB;
}
</style>
<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a class="btn" style="background:#24b3ab; color:white;" href="/staff">Back To Home</a>
            <br><br>
            <div class="card" style="padding:25px; box-shadow:-1px 9px 40px -12px rgba(0,0,0,0.75) ">
            <div class="card-header"  style="background:#24b3ab; color:white;">Create Request</div>
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
        </div>
    </div>
</div>
@endsection
