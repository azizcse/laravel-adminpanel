@extends("layouts.master")

@section("title")
  Services Category-List
@endsection

@section("content")

<!-- Modal -->
<div class="modal fade" id="servicelistmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{url('servicelist-add')}}" method="post">

      {{ csrf_field() }}

      <div class="modal-body">
         <div class="form-group">
           <label for="">Select category</label>
               <select name="serv_cate_id" class="from-control" required>
                 <option value="">-- Select service categoty--</option>
                 @foreach($service_categoty as $item)
                     <option value="{{$item->id}}">{{$item->service_name}}</option>
                 @endforeach
              </select>
         </div>
         <div class="form-group">
            <lable for="">servicelist name</lable>
            <input type="text" name="title" class="from-control" placeholder = "Enter title">
         </div>

         <div class="form-group">
            <lable for="">servicelist description</lable>
            <textarea name="description" rows="3" class="from-control"></textarea>
         </div>

         <div class="form-group">
            <lable for="">servicelist price</lable>
            <input type="text" name="price" class="from-control" placeholder = "Enter price">
         </div>

         <div class="form-group">
            <lable for="">servicelist duration</lable>
            <input type="text" name="duration" class="from-control" placeholder = "Enter duration">
         </div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>


  <div class="row">
     <div class="col-md-12">
        <div class="card">
             <div class="card-header">
             <h4 class="card-title">Services category - list 
               <a href="" class="btn btn-primary py-2 float-right" data-toggle="modal" data-target="#servicelistmodal">Add</a>
             </h4>
             </div>
            <div class="card-body">
               <table class="table">
                  <thead>
                    <tr>
                        <th>ID</th>
                        <th>Serv-cate</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($serviceList as $item)
                     <tr>    
                       <td>{{ $item->id }}</td>
                       <td>{{ $item->service_category->service_name }}</td>
                       <td>{{ $item->title }}</td>
                       <td>{{ $item->description }}</td>
                       <td>{{ $item->price }}</td>
                       <td>
                         <a href="{{url('servicelist-edit/'.$item->id)}}" class="btn btn-info">Edit</button>
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

@endsection