@extends("layouts.master")

@section("title")
  Services
@endsection

@section("content")
  <div class="row">
     <div class="col-md-12">
        <div class="card">
             <div class="card-header">
             <h4 class="card-title">Services category
               <a href="{{url('service-create')}}" class="btn btn-primary py-2 float-right">Add</a>
             </h4>
             </div>
            <div class="card-body">
               <table class="table">
                  <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
     
                     @foreach($services as $item)              
                     <tr>
                        <input type="hidden" class="servicedelete_val_id" value="{{$item->id}}">
                       <td>{{$item->id}}</td>
                       <td>{{$item->service_name}}</td>
                       <td>{{$item->service_description}}</td>
                       <td>
                         <a href="{{url('service-category-edit/'.$item->id)}}" class="btn btn-info">Edit</button>
                       </td>
                       <td>
                           <button type="button" class="btn btn-danger servicedeletebtn">Delete</button>
                       </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
        </div>
     </div>
  </div>
@endsection

@section("scripts")
   <script>
      $(document).ready(function () {
        $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });

        $('.servicedeletebtn').click(function (e) { 
          e.preventDefault();
          
           var delete_id = $(this).closest('tr').find('.servicedelete_val_id').val();
          // alert(delete_id);
                swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to recover this imaginary file!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                      }).then((willDelete) => {
                          if (willDelete) {
                            
                            var data = {
                              "_token": $('input[name=_token]').val(),
                              "id": delete_id
                            };

                            $.ajax({
                              type: "DELETE",
                              url: '/service-cat-delete/'+delete_id,
                              data: data,
                              success: function (response) {
                                  swal(response.status, {
                                     icon: "success",
                                  }).then((result) => {
                                    location.reload();
                                  });
                              }
                            });
                            
                        } 
                  });

        });

      });
   </script>
@endsection