<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sucursal;

class sucursalController extends Controller
{
    public function getSucursal(){
        return response()->json(sucursal::all(),200);
    }

    public function getIdSucursal($id){
        $sucursal = sucursal::find($id);
        if(is_null($sucursal)){
            return response()->json(['Mensaje'=>'No encontrado'],404);
        }
        return response()->json($sucursal::find($id),200);
    }

    public function insertSucursal(Request $request){
        $sucursal = sucursal::create($request->all());
        return response($sucursal, 200);
    }

    public function updateSucursal(Request $request, $id){
        $sucursal = sucursal::find($id);
        if(is_null($sucursal)){
            return response()->json(['Mensaje'=>'No encontrado'],404);
        }
        $sucursal->update($request->all());
        return response($sucursal,200);
    }

    public function deleteSucursal($id){
        $sucursal = sucursal::find($id);
        if(is_null($sucursal)){
            return response()->json(['Mensaje'=>'No encontrado'],404);
        }
        $sucursal->delete();
        return response()->json(['Mensaje'=>'Registro Elminiado'],200);
    }
}
