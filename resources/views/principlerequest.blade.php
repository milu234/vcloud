@extends('layouts.dashboard')

@section('Features')
<ul id="side-main-menu" class="side-menu list-unstyled">                  
    <li><a href="/labs" role="button">View Requests</a></li>
    <li> <a href="/princi/export/xlsx" role="button">Generate Report</a></li>
  </ul>

@endsection

@section('card')
        <div class="container">
                <table class="table table-striped table-hover table-bordered" class="display" id="mydatatable">
                        <thead>
                            <tr>
                                <th>Staff ID</th>
                                <th>Item Name</th>
                                <th>Item Count</th>                              
                            </tr>
                        </thead>
                        <tbody>
                            
                                @foreach ($data as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->item_name}}</td>
                                    <td>{{$item->item_count}}</td>     
                                    <td id="others"><a class="btn btn-success" href="princi/req_accept/{{$item->request_id}}">Approve</a></td>
                                    <td id="teachers"><a class="btn btn-danger" href="princi/req_reject/{{$item->request_id}}">Reject</a></td>
                                </tr>  
                                @endforeach
                            
                            
                        </tbody>    
                    </table>  
        </div>
@endsection
