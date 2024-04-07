<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\item;
class itemController extends Controller
{
    public function index(){
        $items = Item::all();
        return response()->json($items);
    }
    public function update(Request $request, $id)
    {
        $item = Item::findOrFail($id);
        $item->nombre=$request->nombre;
        $item->cantidad=$request->cantidad;
        $item->color=$request->color;
        $item->save();   
        return response()->json($item);
    }
    public function delete($id){
        $item  = Item::findOrFail($id);
        $item->delete();
        return "Eliminado";
    }
    public function create(Request $request){
        $item = new Item ;
        $item->nombre=$request->nombre;
        $item->cantidad=$request->cantidad;
        $item->color=$request->color;
        $item->save();   
        return response()->json($item);
    }
}
