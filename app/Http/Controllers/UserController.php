<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('welcome',compact('users'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {

    }

    public function edit(User $user)
    {
        dd($user->name);
    }

    public function update(Request $request, $id)
    {

    }

    public function destroy(User $user){
       $user->delete();
       return redirect()->route('user.index');
    }

    public function viewTrashed(){
        $trashedusers= User::onlyTrashed()->get();
        return view('trashed',compact('trashedusers'));
    }

    public function restore($id){
        User::withTrashed()->find($id)->restore();
        return redirect()->back();
    }

    public function permanantdelete($id){
        User::withTrashed()->find($id)->forceDelete();
        return redirect()->back();
    }
}
