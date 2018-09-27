
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <a href="/lab_as" class= "btn" style="background:#24b3ab; color:white">Back To Home</a>
                <br>
                <br>
                <h3>History</h3>
                <table class="table table-striped table-hover table-bordered">
                        <thead>
                          <tr>
                            <th>Order</th>
                            <th>Count</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                    @foreach($values as $value)
                            <tr>
                            <td>{{$value->item_name}}</td>
                            <td>{{$value->item_count}}</td>
                            <td>@if($value->status_id === 1)
                                    Sent for Approval
                                @endif
                                @if($value->status_id === 2)
                                    Request forwarded
                                @endif
                                @if($value->status_id === 3)
                                    Approved by HOD
                                @endif
                                @if($value->status_id === 4)
                                    Approved by Principle
                                @endif
                                @if($value->status_id === 5)
                                    Order Placed
                                @endif
                                @if($value->status_id === 6)
                                    Order Received
                                @endif
                                @if($value->status_id === 7)
                                    ACK from Stack Holder
                                @endif</td>
                          </tr>
                    @endforeach
                        </tbody>
                    </table>
        </div>
    </div>
</div>
@endsection

