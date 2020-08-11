@extends("layouts.master")

@section("title")
  Services Category-List edit
@endsection

@section("content")

<div class="row">
     <div class="col-md-12">
        <div class="card">
             <div class="card-header">
               <h4 class="card-title">Services category - list 
               </h4>
             </div>
            <div class="card-body">
            <form action="{{ url('/servicelist-update/'.$serviceList->id) }}" method="post">
                {{ csrf_field() }}
                {{method_field('PUT')}}
                <div class="modal-body">
                <div class="form-group">
                    <label for="">Select category</label>
                        <select name="serv_cate_id" class="from-control" required>
                        <option value="{{$serviceList->serv_cate_id}}">{{ $serviceList->service_category->service_name}}</option>
                        @foreach($service_categoty as $item)
                            <option value="{{$item->id}}">{{$item->service_name}}</option>
                        @endforeach
                        </select>
                </div>
                <div class="form-group">
                    <lable for="">servicelist name</lable>
                    <input type="text" name="title" class="from-control" value="{{$serviceList->title}}">
                </div>

                <div class="form-group">
                    <lable for="">servicelist description</lable>
                    <textarea name="description" rows="3" class="from-control">{{$serviceList->description}}</textarea>
                </div>

                <div class="form-group">
                    <lable for="">servicelist price</lable>
                    <input type="text" name="price" class="from-control" value="{{$serviceList->price}}">
                </div>

                <div class="form-group">
                    <lable for="">servicelist duration</lable>
                    <input type="text" name="duration" class="from-control" value="{{$serviceList->duration}}">
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
  </div>
@endsection

@section("scripts")

@endsection