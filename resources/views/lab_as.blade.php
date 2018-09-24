
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lab Ass</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <a href="lab_as/request">New Request</a>
                    <br>
                    <a href="lab_as/history">History</a>
                    <br>
                    <a href="lab_as/labcomponent">Lab Components</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

