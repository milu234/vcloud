@extends('layouts.dashboard')

    @section('staff')
    <h1 class="add">StakeHolder</h1>
    <table class="table table-striped table-hover table-bordered" class="display" id="mydatatable">
            <thead>
                <tr>
                    <th style="width:200px">Name of StakeHolder</th>
                    <th>Departments</th>
                    <th>Item Name</th>
                    <th>Item Count</th>
                    <th><th style="width:190px"></th></th>
                    {{-- <th  style="width:150px"></th>
                    <th style="width:190px"></th>
                    <th style="width:200px"></th>
                     --}}
                    
                    
                </tr>
            </thead>
            <tbody>
              
                
               
 @foreach ($data as $item)
<tr>
    <td>{{$item->name}}</td>
    <td>{{$item->dept_name}}</td>
    <td>{{$item->item_name}}</td>
    <td>{{$item->item_count}}</td>
    {{-- <td>{{$item->status_id}}</td>      --}}
    {{-- <td id="check"><a class="btn" style="background:#fc3;color:white;" href="store_manager/approve/{{$item->status_id}}">Hold</a></td> --}}
    {{-- @if($item->request_type==0) --}}
<td ><a class="btn btn-success" href="/store_manager/requests/{{$item->request_id}}/edit">Fill Indent</a></td>
    {{-- <td id="teachers"><a class="btn btn-danger" href="staffR/forward/{{$item->request_id}}">Denied</a></td> --}}
    {{-- @endif --}}
</tr>  
@endforeach 
                
               
            </tbody>    
            </table>   
            @stop
    
