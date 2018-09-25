
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <h3>History</h3>
            <div class="card">
                    @foreach($values as $value)
                        <h3>{{$value->item_name}}</h3>
                        <h2>{{$value->item_count}}</h2>
                    <hr>
                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection

