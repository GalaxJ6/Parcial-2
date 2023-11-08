<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class adminController extends Controller
{
    public function index()
    {
        $admins = Admin::all();
        return view('admins.adminC',compact('admins'));
    }


    public function store(Request $request)
    {
        $admin = new Admin();
        $admin->nameAdmin = $request->nAm;
        $admin->cedAdmin = $request->cAm;
        $admin->save();
        return redirect()->route('admins.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $admin = Admin::find($id);
        return view('AdminCE',compact('admins'));
    }


    public function update(Request $request, $id)
    {
        $admin = Admin::find($id);
        $admin->nameAdmin = $request->nAm;
        $admin->cedAdmin = $request->cAm;
        $admin->save();
        return redirect()->route('admins.index');
    }

    public function destroy($id)
    {
        $admin = Admin::find($id);
        $admin->delete();
        return redirect()->route('admins.index');
    }
}
