@extends('layouts.master')
@section('title')Dashboard @endsection
@section('content')

    <div class="container-fluid">

    <div class="row mt-3">
    
    @include('admin.setting.subnav')

      <div class="col-lg-9">
        <div class="card">
          <div class="card-header">Role Permission Edit Form</div>
            <div class="card-body">
              <hr>
              <form action="{{ Route('role_permission_update',$users->id)}}" method="POST">
              @csrf
           <div class="form-group row">
            <label for="input-1" class="col-md-4 col-form-label text-md-right">Name</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="name" value="{{ $users->name}}" id="input-1" placeholder="Enter Your Name">
            </div>
           </div>
           <div class="form-group row">
            <label for="input-4" class="col-md-4 col-form-label text-md-right">Give Role</label>
            <div class="col-md-6">
              <select name="usertype" id="input-4" class="form-control">
              <option value="admin">Admin</option>
              <option value="vendor">Vendor</option>
              <option value="Null">None</option>
            </select>
            </div>
           </div>
           <div class="form-group row mb-0">
              <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-light px-5">
                Update Role
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