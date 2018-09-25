
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="/lab_as" class= "btn btn-primary">Back to Home</a>
                <h3>Lab Components</h3>
                <table class="table">
                        <thead>
                          <tr>
                            <th>Item Name</th>
                            <th>Spare</th>
                            <th>Working</th>
                            <th>Not Working</th>
                          </tr>
                        </thead>
                        <tbody>
                    @foreach($values as $value)
                            <tr>
                            <td>{{$value->item_name}}</td>
                            <td>{{$value->spare}}</td>
                            <td>{{$value->working}}</td>
                            <td>{{$value->not_working}}</td>
                          </tr>
                    @endforeach
                        </tbody>
                    </table>
        </div>
    </div>
</div>
@endsection


