@extends('layouts.master')
@section('title')Dashboard @endsection
@section('content')

    <div class="container-fluid">

    <div class="row mt-3">
    @include('admin.setting.subnav')

      <div class="col-lg-9">
        <div class="card">
            <div class="card-body">
              <h2 class="card-title">Role Permission Table</h2>
              <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">NAME</th>
                      <th scope="col">PHONE</th>
                      <th scope="col">EMAIL</th>
                      <th scope="col">ROLE</th>
                      <th scope="col">EDIT | DELETE</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($users as $row)
                    <tr>
                      <input type="hidden" class="userdelete_val_id" value="{{ $row->id}}">
                      <th scope="row">{{ $row->id}}</th>
                      <td>{{ $row->name}}</td>
                      <td>{{ $row->phone}}</td>
                      <td>{{ $row->email}}</td>
                      <td>{{ $row->usertype}}</td>
                      <td>
                        <a href="{{ Route('role-edit',$row->id)}}" class="btn btn-success">EDIT</a>
                          
                        <button type="button" id="read-data" class="btn btn-danger userdeletebtn">Delete</button>
                      </td>
                    </tr>
                    @endforeach
                     
                  </tbody>
                </table>
              </div>
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

@section('script')
<script type="text/javascript">
    $(document).ready(function () {

           $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')  
          }
        });

      $('.userdeletebtn').click(function (e) {
          e.preventDefault();

          var delete_id = $(this).closest("tr").find('.userdelete_val_id').val();
          // alert(delete_id);

          swal({
          title: "Are you sure?",
          text: "Delete It!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })

        .then((willDelete) => {
            if (willDelete) {

              var data = {
                "_token": $('input[name=_token').val(),
                "id": delete_id,
              };
              $.ajax({
                type: "DELETE",
                url: '/role-delete/'+delete_id,
                data:data,
                success:function (response){
                  swal(response.status , {
                icon: "success",
                  })
                  .then((result) => {
                    location.reload();
                  });
                }
              })
              
            } else {
                    swal("Cancelled", "Your imaginary Data is safe :)", "error");
                }
        });
      });
    });

</script>
{{-- <script type="text/javascript" charset="utf-8">
      $('#read-data').on('click', function(){

      alert('sdsdsd');

      });
       </script> --}}

@endsection