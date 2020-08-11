<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{
    public function register(){
        $users = User::all();
        return view("admin.register")->with('users', $users);
    }

    public function registeredit(Request $request, $id){
        $user = User::findOrFail($id);
        return view("admin.register-edit")->with("user", $user);
    }

    public function registereUpdate(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->input("username");
        $user->usertype = $request->input("usertype");
        $user->update();

        return redirect("/role-register")->with('status','Update successful');
    }

    public function registereDelete($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect("/role-register")->with('status','Delete successful');
    }
}
