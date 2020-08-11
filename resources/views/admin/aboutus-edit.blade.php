@extends("layouts.master")

@section("title")
  Dashboadr Techfort web IT
@endsection

@section("content")
<div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                     <h4 class='card-title'>Edit About us</h4>
                     
                     <form action="{{url('/aboutus-update/'.$about->id)}}" method="POST">
                        {{ csrf_field() }}
                        {{method_field("PUT")}}
                        <div class="modal-body">        
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Title:</label>
                                <input type="text" name='title' class="form-control" value="{{$about->title}}">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Subtitle:</label>
                                <input type="text" name='subtitle' class="form-control" value="{{$about->subtitle}}">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Description:</label>
                                <textarea class="form-control" name='description' >{{$about->description}}</textarea>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <a href="{{url('abouts')}}" class="btn btn-secondary">Back</a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                        </form
                  </div>
             </div>
        </div>
    </div>
</div>

@endsection

@section("scripts")
@endsection