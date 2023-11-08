<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chef;

class chefController extends Controller
{
    public function index()
    {
        $chefs = Chef::all();
        return view('chefs.chefC',compact('chefs'));
    }


    public function store(Request $request)
    {
        $chef = new Chef();
        $chef->nameChef = $request->nCf;
        $chef->cedChef = $request->cCf;
        $chef->save();
        return redirect()->route('chefs.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $chef = Chef::find($id);
        return view('chefCE',compact('chef'));
    }


    public function update(Request $request, $id)
    {
        $chef = Chef::find($id);
        $chef->nameChef = $request->nCf;
        $chef->cedChef = $request->cCf;
        $chef->save();
        return redirect()->route('chefs.index');
    }

    public function destroy($id)
    {
        $chef = Chef::find($id);
        $chef->delete();
        return redirect()->route('chefs.index');
    }
}
