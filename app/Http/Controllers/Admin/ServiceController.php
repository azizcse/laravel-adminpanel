<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use Illuminate\Support\Facades\Session;

class ServiceController extends Controller
{
    public function index(){
        $services = ServiceCategory::all();
        return view('admin.services.index')->with('services', $services);
    }

    public function create(){
        return view('admin.services.create');
    }

    public function store(Request $request){
        $category = new ServiceCategory();
        $category->service_name = $request->input('service_name');
        $category->service_description = $request->input('service_description');

        $category->save();
        Session::flash('statuscode','success');
        return redirect('/service-category')->with('status','Category added success');
    }

    public function edit($id){
        $service_category = ServiceCategory::find($id);
        return view('admin.services.edit')->with('service_category',$service_category);
    }

    public function update(Request $request, $id){
        $service = ServiceCategory::find($id);

        $service->service_name = $request->input('service_name');
        $service->service_description = $request->input('service_description');
        
        $service->update();
        Session::flash('statuscode','info');
        return redirect('/service-category')->with('status','Category update success');
    }

    public function delete($id){
        $service = ServiceCategory::find($id);
        $service->delete();
        return response()->json(['status'=>'Service Category deleted']);
    }

}
