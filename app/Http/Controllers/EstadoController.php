<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estado;
use Exception;

class EstadoController extends Controller
{
    public function getEstadoAll(){
        return response()->json(Estado::all(), 200);
    }

    public function getEstado($id){
        $estado = Estado::find($id);
        if(is_null($estado)){
            return response()->json(['errors'=>array(['code'=>404,'message'=>'No se encuentra un estado con ese código.'])],404);
        }
        return response()->json(['status'=>'ok','data'=>$estado::find($id)],200);
    }

    public function postEstado(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);


        $estado = Estado::create($request->all());
        return response(['status'=>'created','data'=>$estado],201);
    }

    public function putEstado(Request $request, $id){
        $estado = Estado::find($id);
        if(is_null($estado)){
            return response()->json(['errors'=>array(['code'=>404,'message'=>'No se encuentra un estado con ese código.'])],404);
        }
        $estado->update($request->all());
        return response($estado,200);
    }

    public function deleteEstado($id){

        $estado = Estado::find($id);

        try{
            if(is_null($estado)){
                return response()->json(['errors'=>array(['code'=>404,'message'=>'No se encuentra un estado con ese código.'])],404);
            }
            $estado->delete(); //no se usa el metodo eliminar pero queda ahi por documentacion
            return response()->json(['status'=>'no content','data'=>'Estado Eliminado'],204);
        } catch (Exception $e){
            return response()->json(['status'=>'bad request','data'=>'Error al momento usar recurso del servidor'],400);
        }

    }
}
