<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Servicecategory;
use App\Models\ServiceList;

class ServiceListController extends Controller
{
    public function index(){
        $service_category = Servicecategory::all();
        $serviceList = ServiceList::all();
        return view('admin.service-list.index')
              ->with('service_categoty',$service_category)
              ->with('serviceList',$serviceList);
    }

    public function save(Request $request){    
        $serviceList = new ServiceList();
        $serviceList->serv_cate_id = $request->input('serv_cate_id');
        $serviceList->title = $request->input('title');
        $serviceList->description = $request->input('description');
        $serviceList->price = $request->input('price');
        $serviceList->duration = $request->input('duration');

        $serviceList->save();

        return redirect()->back()->with('status', 'Service list added');

    }

    public function edit($id){
        $serviceList = ServiceList::find($id);
        $service_categoty = Servicecategory::all();
        return view('admin.service-list.edit')
                ->with('serviceList',$serviceList)
                ->with('service_categoty',$service_categoty);
    }

    public function update(Request $request, $id){
        $serviceList = ServiceList::find($id);
        $serviceList->serv_cate_id = $request->input('serv_cate_id');
        $serviceList->title = $request->input('title');
        $serviceList->description = $request->input('description');
        $serviceList->price = $request->input('price');
        $serviceList->duration = $request->input('duration');

        $serviceList->update();

        return redirect('/service-list')->with('status', 'Service list update');
    }
}
