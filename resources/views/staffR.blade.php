@extends('layouts.dashboard')

    @section('staff')
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
            @stop
    
