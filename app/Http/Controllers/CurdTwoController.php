<?php

namespace App\Http\Controllers;

use App\Models\CrudTwo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CurdTwoController extends Controller
{
    //
   public function list(){
    $listdata = CrudTwo::all();
    return view('crud2.list',['listdata'=>$listdata]);
   }

   public function input_fild(){
    return view('crud2.input_fild');
   }

   public function insertdata(Request $request){

     $getdata = new CrudTwo;
     $getdata->fullname = $request->name;
     $getdata->username = $request->username;
     $getdata->email = $request->email;
     $getdata->password = Hash::make($request->password);

     //image upload
     $image = $request->file;
     $imagename = time().'.'.$image->getClientoriginalExtension();
     $request->file->move('image_first',$imagename);
     $getdata->image = $imagename;

     $getdata->save();

     return redirect('/list')->with('success','Add SuccessFully');

   }

   public function listedit($id){

    $getdata = CrudTwo::find($id);

    return view('crud2.listedit',['getdata'=>$getdata]);


   }

   public function updatelist(Request $request,$id){
     $getdata = CrudTwo::find($id);
     $getdata->fullname = $request->name;
     $getdata->username = $request->username;
     $getdata->email = $request->email;

     //image upload
     $image = $request->file;
     $imagename = time().'.'.$image->getClientoriginalExtension();
     $request->file->move('image_first',$imagename);
     $getdata->image = $imagename;

     $getdata->save();
     return redirect('/list')->with('update','Update SuccessFully');

   }

   public function deletelist($id){
    $getdata = CrudTwo::find($id);
    $getdata->delete();
    return redirect('/list')->with('delete','Delete SuccessFully');
   }

}
