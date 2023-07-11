@extends('layouts.master')
@section('title')Dashboard @endsection
@section('content')
<div class="container-fluid">
  <div class="row mt-3">
    @include('admin.setting.subnav')
    <div class="col-lg-9">
      <div class="card">
        <div class="card-header">Change Password</div>
        
        <div class="card-body">
          <form method="POST" action="{{ route('change.password') }}">
            @csrf
            
            @foreach ($errors->all() as $error)
            <p class="text-danger">{{ $error }}</p>
            @endforeach
            
            <div class="form-group row">
              <label for="password" class="col-md-4 col-form-label text-md-right">Current Password</label>
              
              <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password" placeholder="Enter your old Password">
              </div>
            </div>
            
            <div class="form-group row">
              <label for="password" class="col-md-4 col-form-label text-md-right">New Password</label>
              
              <div class="col-md-6">
                <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">
              </div>
            </div>
            
            <div class="form-group row">
              <label for="password" class="col-md-4 col-form-label text-md-right">New Confirm Password</label>
              
              <div class="col-md-6">
                <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">
              </div>
            </div>
            
            <div class="form-group row mb-0">
              <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-light px-5">
                Update Password
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
      
    </div>
    </div><!--End Row-->
    <!--start overlay-->
    <div class="overlay toggle-menu"></div>
    <!--end overlay-->
  </div>
  <!-- End container-fluid-->
  <!--End content-wrapper-->
  @endsection