<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index(){
        $categories = Categorie::all();
        return view('categories.list',['categories'=>$categories]);
    }
    public function create(){
        return view('categories.new');
    }

    public function store(Request $request){

        $request->validate([
            "title"=> "required|unique:categories|max:200"
        ]);

          $Categorie = new Categorie;//this is model name
          $Categorie->title=$request->title;
          $Categorie->save();
          return redirect('/')->withSuccess('New Category created');
    }

    public function edit($id){
        $Categorie = Categorie::where('id',$id)->first();
        return view('categories.edit',['Categorie'=>$Categorie]);
    }

    public function update(Request $request,$id){
        $Categorie =Categorie::where('id',$id)->first();//this is model name
        $Categorie->title=$request->title;
        $Categorie->save();
        return redirect('/')->withUpdate('Category Is Update Success');

  }

  public function delete($id){
    $Categorie =Categorie::whereId($id)->first();

    $Categorie->delete();

    return redirect('/')->withDelete('Category is Deleted ');
  }
}
