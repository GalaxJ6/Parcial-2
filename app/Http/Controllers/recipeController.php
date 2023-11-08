<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class recipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::all();
        return view('recipes.recipeC',compact('recipes'));
    }


    public function store(Request $request)
    {
        $recipe = new Recipe();
        $recipe->nameRecipe = $request->nR;
        $recipe->nameP = $request->nP;
        $recipe->cantP = $request->cP;
        $recipe->nameC = $request->nC;
        $recipe->cantC = $request->cC;
        $recipe->nameV = $request->nV;
        $recipe->cantV = $request->cV;
        $recipe->save();
        return redirect()->route('recipes.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $recipe = Recipe::find($id);
        return view('recipeCE',compact('recipe'));
    }


    public function update(Request $request, $id)
    {
        $recipe = Recipe::find($id);
        $recipe->nameRecipe = $request->nR;
        $recipe->nameP = $request->nP;
        $recipe->cantP = $request->cP;
        $recipe->nameC = $request->nC;
        $recipe->cantC = $request->cC;
        $recipe->nameV = $request->nV;
        $recipe->cantV = $request->cV;
        $recipe->save();
        return redirect()->route('recipes.index');
    }

    public function destroy($id)
    {
        $recipe = Recipe::find($id);
        $recipe->delete();
        return redirect()->route('recipes.index');
    }
}
