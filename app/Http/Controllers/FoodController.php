<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use Auth;

class FoodController extends Controller
{
   public function index (){
       $user=Auth::id();
       $data=Food::where("user_id",$user)->get();
       return view("Donor.main",compact("data"));

   }
   public function supplierindex (){
    $data=Food::all();
    return view("Supplier.view",compact("data"));

}
public function destroy ($id){
    $data=Food::find($id);
   

    if($data->delete()){
        return redirect("/donor")->with("status","Deleted Sucessfully");

    }
    else{
        return redirect("/donor")->with("status","Sorry Try Again!");

    }

}


public function edit ($id){
    $data=Food::find($id);
    return view("Donor.edit", compact("data"));

}
public function update (Request $request, $id){
    $data=Food::find($id);
    $data->food_item=$request->food_item;
    $data->best_untill=$request->best_untill;
    $data->address=$request->address;
    $data->contact=$request->contact;
    $data->save();
    
    if($data->save())
    {
        return redirect("/donor")->with ("status","Edited Sucessfully");
    }
    else{
        return redirect("/donor/edit")->with ("status","Sorry There was an error!!");
    }
}

   public function create (){
    return view("Donor.create");
}
public function store (Request $request)
{
$request->validate([
    "user_name"=>"required",
    "user_id"=>"required",
    "food_item"=>"required",
    "best_untill"=>"required",
    "address"=>"required",
    "contact"=>"required"
]);

$data=new Food();
$data->food_item=$request->food_item;
$data->best_untill=$request->best_untill;
$data->user_name=$request->user_name;
$data->user_id=$request->user_id;
$data->address=$request->address;
$data->contact=$request->contact;

$data->save();
if($data->save())
{
    return redirect("/donor")->with("status","Food added sucessfully");
}
else{
    return redirect("/food/create")->with("status","Sorry there was an error!!");
}

}

}
