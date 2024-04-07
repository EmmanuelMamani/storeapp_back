<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;
class productoController extends Controller
{
    public function index(){
        $productos = Producto::all();
        return response()->json($productos);
    }
    public function update(Request $request, $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->nombre=$request->nombre;
        $producto->imagen=$request->imagen;
        $producto->detalle=$request->detalle;
        $producto->save();   
        return response()->json($producto);
    }
    public function delete($id){
        $producto  = Producto::findOrFail($id);
        $producto->delete();
        return "Eliminado";
    }
    public function create(Request $request){
        $producto = new Producto ;
        $producto->nombre=$request->nombre;
        $producto->imagen=$request->imagen;
        $producto->detalle=$request->detalle;
        $item->save();   
        return response()->json($producto);
    }
}
