<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use Illuminate\Http\Request;

class categoriaController extends Controller
{
    public function index(){
        $categorias = Categoria::all();
        return response()->json($categorias);
    }
    public function update(Request $request, $id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->nombre=$request->nombre;
        $categoria->save();   
        return response()->json($categoria );
    }
    public function delete($id){
        $categoria  = Categoria::findOrFail($id);
        $categoria->delete();
        return "Eliminado";
    }
    public function create(Request $request){
        $categoria = new Categoria;
        $categoria->nombre=$request->nombre;
        $categoria->save();   
        return response()->json($categoria);
    }
}
