<?php

namespace App\Http\Controllers;
use App\Models\Almacen;
use Illuminate\Http\Request;
class AlmacenController extends Controller
{
    public function index(){
        $almacenes = Almacen::all();
        return response()->json($almacenes);
    }
    public function show($id){
        $almacen = Almacen::findOrFail($id);
        return response()->json($almacen);
    }
    public function update(Request $request, $id)
    {
        $almacen = Almacen::findOrFail($id);
        $almacen->nombre=$request->nombre;
        $almacen->color=$request->color;
        $almacen->save();   
        return response()->json($almacen);
    }
    public function delete($id){
        $almacen = Almacen::findOrFail($id);
        $almacen->delete();
        return "Eliminado";
    }
    public function create(Request $request){
        $almacen= new Almacen;
        $almacen->nombre=$request->nombre;
        $almacen->color=$request->color;
        $almacen->save();   
        return response()->json($almacen);
    }
}
