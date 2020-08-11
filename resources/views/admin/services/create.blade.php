@extends("layouts.master")

@section("title")
  Services
@endsection

@section("content")
  <div class="row">
     <div class="col-md-12">
        <div class="card">
             <div class="card-header">
             <h4 class="card-title">Services category -add
               <a href="{{url('service-category')}}" class="btn btn-primary py-2 float-right">Back</a>
             </h4>
             </div>
            <div class="card-body">
               <form action="{{url('category-store')}}" method="POST">                 
                 {{ csrf_field() }}

                <div class="row">
                   <div class="col-md-6">
                      <div class="form-group">
                         <lable>Service cate name</label>
                         <input type="text" name="service_name" class="form-control" placeholder="Enter service name">
                      </div>
                   </div>

                   <div class="col-md-12">
                      <div class="form-group">
                         <lable>Service cate Description</label>
                         <textarea type="text" name="service_description" class="form-control" placeholder="Enter service Description">
                         </textarea>
                      </div>
                   </div>
                   <div class="col-md-12">
                     <button type="submit" class="btn btn-info">Save</button>
                   </div>
                </div>
                </form>
            </div>
        </div>
     </div>
  </div>
@endsection

@section("scripts")
@endsection