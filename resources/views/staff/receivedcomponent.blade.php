
@extends('layouts.dashboard')

@section('staff')<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <a href="/staff" class= "btn" style="background:#24b3ab; color:white">Back To Home</a>
                <br>
                <br>
                <h3>Received Components</h3>
                <table class="table table-striped table-hover table-bordered">
                        <thead>
                          <tr>
                            <th>Request ID</th>
                            <th>Item Name</th>
                            <th>Item Count</th>
                            <th>Send Ack </th>
                          </tr>
                        </thead>
                        <tbody>
                    @foreach($values as $value)
                            <tr>
                            <td>{{$value->request_id}}</td>
                            <td>{{$value->item_name}}</td>
                            <td>{{$value->item_count}}</td>
                            <td><a href="/staff/received-component/{{$value->request_id}}" class="btn btn-success">Send Ack</a></td>
                          </tr>
                    @endforeach
                        </tbody>
                    </table>
        </div>
    </div>
</div>
@endsection

