@extends('layouts.dashboard')
      <!-- Counts Section -->
      @section('staff')
          
      @endsection
           <h1 class="add">Home</h1>
           <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add User +') }}</div>

                <div class="card-body">
                    <form method="POST">
                      
                    <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label text-center">{{ __('Full Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control">

                
                            </div>
                    </div>
                    <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label text-center">{{ __('Email') }}</label>

                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control">

                
                            </div>
                    </div>
                    <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label text-center">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control">

                
                            </div>
                    </div>
                    <div class="form-group row">
                        <label for="branches" class="col-sm-4 col-form-label text-center">Branches</label>
                        <div class="col-md-6">
                            <select class="form-control" id="branch-select">
                                <option></option>
                                <option>Instrumentation</option>
                                <option>Electronics & Telecomunications</option>
                                <option>Electronics</option>
                                <option>MCA</option>
                                <option>IT</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="role" class="col-sm-4 col-form-label text-center">Role</label>
                        <div class="col-md-6">
                            <select class="form-control" id="role">
                                <option></option>
                                <option>Staff</option>
                                <option>Lab Assistant</option>
                                <option>Department Officer</option>
                                <option>HOD</option>
                                <option>Principal</option>
                                <option>Store Manager</option>
                            
                            </select>
                        </div>
                    </div>
                    

                        <button type="submit" class="btn btn-primary new">
                                    {{ __('Save') }}
                                </button>
@endsection
