@extends('layouts.app')

@section('content')
<style>
.colorsection{
    background-color: #24B3AB;
}
</style>
<div class="container">
    <div class="" style="background:#24b3ab;"><a href="/staff">Back To Home</a></div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">Create Request</div>
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
