
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <a href="/staff" class= "btn btn-primary">Back To Home</a>
                <br>
                <br>
                <h3>History</h3>
                <table class="table">
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
                            <td>{{$value->status_id}}</td>
                          </tr>
                    @endforeach
                        </tbody>
                    </table>
        </div>
    </div>
</div>
@endsection

