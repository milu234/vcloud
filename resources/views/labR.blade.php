
@section('dashboard_name')
    Lab Assistant Request
    @stop


    @extends('layouts.dashboard')

    @section('staff')
    <h1 class="add">StakeHolder</h1>
    <table class="table table-striped table-hover table-bordered" class="display" id="mydatatable">
            <thead>
                <tr>
                    <th>Lab Assistant Name</th>
                    <th>Lab Number</th>
                    <th>Department</th>
                    <th>Item Name</th>
                    <th>Item Count</th>
                    <th  style="width:150px"></th>
                    <th style="width:190px"></th>
                    
                    
                </tr>
            </thead>
            <tbody>
              
                
               
                    @foreach ($data as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->lab_no}}</td>  
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
                        <td>{{$item->item_count}}</td>     
                        <td id="check"><a class="btn" style="background:#fc3;color:white;" href="labR/check/{{$item->request_id}}">Check Availabilaty</a></td>
                        <td id="teachers"><a class="btn btn-danger" href="labR/forward/{{$item->request_id}}">Forward request</a></td>
                    </tr>  
                    @endforeach
                
               
            </tbody>    
            </table>   
            @stop
    
