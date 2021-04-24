<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
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
			return response()->json(['error'=>array(['codigo'=>422,'mensaje'=>'Faltan datos agregar estado.'])],422);
		}

        $nuevoEstado = Estado::create($request->all());

        return response(['status'=>'creado','data'=>$nuevoEstado],201);
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
            return response()->json(['status'=>'bad request','data'=>'Error al momento usar recurso del servidor'],400);
        }

    }
}
