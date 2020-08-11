@extends("layouts.master")

@section("title")
  Dashboadr Techfort web IT
@endsection

@section("content")

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add about us</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/save-aboutus" method="POST">
      {{ csrf_field() }}
      <div class="modal-body">        
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Title:</label>
            <input type="text" name='title' class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Subtitle:</label>
            <input type="text" name='subtitle' class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Description:</label>
            <textarea class="form-control" name='description' id="message-text"></textarea>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="deleteModalPopup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm delete!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form id='delete_model_form' method="POST">
          {{ csrf_field() }}
          {{method_field('DELETE')}}
       
        <div class="modal-body">
          <input type="hidden" id='delete_aboutus_id'>
          <h5>Are you sure..? want to delete this data.</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Yes delete it</button>
        </div>
      </form>
    </div>
  </div>
</div>

 
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Aboutus Table
                
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Add</button>
                </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="dataTable" class="table">
                    <thead class=" text-primary">
                      <th>Id</th>
                      <th>Title</th>
                      <th>Subtitle</th>
                      <th>Description</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </thead>
                    <tbody>
                    @foreach($abouts as $about)
                      <tr>
                        <td>{{$about->id}}</td>
                        <td> {{$about->title}}</td>
                        <td>{{$about->subtitle}}</td>
                        <td> {{$about->description}}</td>
                        <td>
                          <a href="{{ url('about-us/'.$about->id) }}" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                        <a href="javascript:void(0)" class="btn btn-danger deletebtn">Delete</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection

@section("scripts")
<script>
  $(document).ready( function () {
      $('#dataTable').DataTable();

      $('#dataTable').on('click','.deletebtn',function(){

        $tr = $(this).closest('tr');
        var data = $tr.children('td').map(function(){
          return $(this).text();
        }).get();
        
        $('#delete_aboutus_id').val(data[0]);
        $('#delete_model_form').attr('action','/aboutus-delete/'+data[0]);
        $('#deleteModalPopup').modal('show');

      });
  } );
</script>
@endsection
