<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests; // Add this
use PhpParser\Node\Expr\FuncCall;

class ProductController extends Controller
{
    use ValidatesRequests; // Add this

    public function index(){
        $foodList = ProductModel::all();
        return view("foodview.front", compact("foodList"));
    }

    public function show($id){
        $fooddetail = ProductModel::find($id);
        return view("foodview.detail", compact("fooddetail"));
    }

    public function create(){
        return view("foodview.add");
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            "Food_Name" => "required",
            "Food_title" => "required",
            "qty_Food" => "required",
            "Food_Price" => "required"
        ]);

        ProductModel::create($request->all());
        return redirect()->route('food.index');
    }

    public function edit($id){
        $foodList = ProductModel::find($id);
        return view("foodview.edit", compact("foodList"));
    }
    public function update(Request $request,$id){
        $this->validate($request,[
            "Food_Name" => "required",
            "Food_title" => "required",
            "qty_Food" => "required",
            "Food_Price" => "required"
        ]);
        ProductModel::find($id)->update($request->all());
        return redirect()->route("food.index");
    }
    public function destroy($id){
      productmodel::find($id)->delete();
      return redirect()->route('food.index');
    }
}
