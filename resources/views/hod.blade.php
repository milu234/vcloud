
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">HOD</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <p><a class="btn btn-primary btn-lg" href="/labs" role="button">View Requests</a> <a class="btn btn-success btn-lg" role="button" href="/register" >View Records</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

