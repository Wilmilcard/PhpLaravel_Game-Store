<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Estado;
use Exception;

class EstadoController extends Controller
{
    public function index()
    {
        $estados = Cache::remember('cacheestados', 20/60, function () {
            return Estado::simplePaginate(10);
        });
        return response()->json(['status'=>'ok', 'siguiente'=>$estados->nextPageUrl(),'anterior'=>$estados->previousPageUrl(),'data'=>$estados->items()],200);
    }

    public function show($id)
    {
        $estado = Estado::find($id);
        if(is_null($estado)){
            return response()->json(['error'=>array(['codigo'=>404,'mensaje'=>'No se encuentra un estado con ese código.'])],404);
        }
        return response()->json(['status'=>'ok','data'=>$estado],200);
    }

    public function create(Request $request)
    {
		if (!$request->input('nombre'))
		{
			return response()->json(['error'=>array(['codigo'=>422,'mensaje'=>'Faltan datos para agregar estado.'])],422);
		}

        try
        {
            $nuevoEstado = Estado::create($request->all());
            return response(['status'=>'creado','data'=>$nuevoEstado],201);
        }
        catch(Exception $e)
        {
            return response()->json(['error'=>array(['codigo'=>304,'mensaje'=>'No se ha creado ningún dato.','error'=>$e])],304);
        }

    }

    public function edit() { }


    public function update(Request $request, $id)
    {
        $estado = Estado::find($id);

        if(is_null($estado))
        {
            return response()->json(['error'=>array(['codigo'=>404,'mensaje'=>'No se encuentra un estado con ese código.'])],404);
        }

        $nombre=$request->input('nombre');

        try
        {
            if($request->method() === 'PATCH')
            {
                $bandera = false;
                if ($nombre)
                {
                    $estado->nombre = $nombre;
                    $bandera=true;
                }

                if($bandera)
                {
                    $estado->save();
                    return response()->json(['status'=>'ok','data'=>$estado], 200);
                }
                else
                {
                    return response()->json(['error'=>array(['codigo'=>304,'mensaje'=>'No se ha modificado ningún dato.'])],304);
                }
            }

            $estado->update($request->all());
            return response(['status'=>'ok','data'=>$estado],200);
        }
        catch(Exception $e)
        {
            return response()->json(['error'=>array(['codigo'=>409,'mensaje'=>'Conflicto al procesar peticion','error'=>$e])],409);
        }
    }

    public function destroy($id)
    {
        $estado = Estado::find($id);

        try
        {
            if(is_null($estado))
            {
                return response()->json(['error'=>array(['codigo'=>404,'mensaje'=>'No se encuentra un estado con ese código.'])],404);
            }

            $estado->delete(); //no se usa el metodo eliminar pero queda ahi por documentacion
            return response()->json(['status'=>'no content','data'=>'Se ha eliminado correctamente'],204);
        }
        catch (Exception $e)
        {
            return response()->json(['status'=>'bad request','data'=>'Conflicto al procesar peticion','error'=>$e],409);
        }

    }
}
