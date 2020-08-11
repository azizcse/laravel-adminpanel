<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Abouts;
use Illuminate\Support\Facades\Session;
class AboutusController extends Controller
{
    public function show(){
        $abouts = Abouts::all();
        return view('admin.aboutus')->with('abouts',$abouts);
    }

    public function save(Request $request){
        $aboutus = new Abouts();
        $aboutus->title = $request->input("title");
        $aboutus->subtitle = $request->input("subtitle");
        $aboutus->description = $request->input("description");

        $aboutus->save();
        Session::flash('statuscode','success');
        return redirect('/abouts')->with('status','About us added');
    }

    public function edit($id){
        $about = Abouts::findOrFail($id);
        return view('admin.aboutus-edit')->with('about',$about);
    }

    public function update(Request $request, $id){
        $about = Abouts::findOrFail($id);

        $about->title = $request->input('title');
        $about->subtitle = $request->input('subtitle');
        $about->description = $request->input('description');
        $about->save();
        Session::flash('statuscode','info');
        return redirect('abouts')->with('status', 'About us updated');
    }

    public function delete($id){
        $about = Abouts::findOrFail($id);
        $about->delete();
        Session::flash('statuscode','error');
        return redirect('abouts')->with('status', 'About us deleted');
    }
}
