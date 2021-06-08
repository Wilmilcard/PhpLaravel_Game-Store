<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Protagonista;
use Exception;

class ProtagonistaController extends Controller
{
    public function index()
    {
        $protagonista = Cache::remember('protagonistacache', 20/60, function () {
            return Protagonista::simplePaginate(15);
        });
        return response()->json(['status'=>'ok', 'siguiente'=>$protagonista->nextPageUrl(),'anterior'=>$protagonista->previousPageUrl(),'data'=>$protagonista->items()],200);
    }

    public function show($id)
    {
        $protagonista = Protagonista::find($id);
        if(is_null($protagonista)){
            return response()->json(['error'=>array(['codigo'=>404,'mensaje'=>'No se encuentra un protagonista con ese código.'])],404);
        }
        return response()->json(['status'=>'ok','data'=>$protagonista],200);
    }

    public function create(Request $request)
    {
		if (!$request->input('nombre'))
		{
			return response()->json(['error'=>array(['codigo'=>422,'mensaje'=>'Faltan datos para agregar protagonista.'])],422);
		}

        try
        {
            $nuevoProtagonista = Protagonista::create($request->all());
            return response(['status'=>'creado','data'=>$nuevoProtagonista],201);
        }
        catch(Exception $e)
        {
            return response()->json(['error'=>array(['codigo'=>304,'mensaje'=>'No se ha creado ningún dato.','error'=>$e])],304);
        }

    }

    public function update(Request $request, $id)
    {
        $protagonista = Protagonista::find($id);

        if(is_null($protagonista))
        {
            return response()->json(['error'=>array(['codigo'=>404,'mensaje'=>'No se encuentra un protagonista con ese código.'])],404);
        }

        $nombre=$request->input('nombre');

        try
        {
            if($request->method() === 'PATCH')
            {
                $bandera = false;
                if ($nombre)
                {
                    $protagonista->nombre = $nombre;
                    $bandera=true;
                }

                if($bandera)
                {
                    $protagonista->save();
                    return response()->json(['status'=>'ok','data'=>$protagonista], 200);
                }
                else
                {
                    return response()->json(['error'=>array(['codigo'=>304,'mensaje'=>'No se ha modificado ningún dato.'])],304);
                }
            }

            $protagonista->update($request->all());
            return response(['status'=>'ok','data'=>$protagonista],200);
        }
        catch(Exception $e)
        {
            return response()->json(['error'=>array(['codigo'=>409,'mensaje'=>'Conflicto al procesar peticion','error'=>$e])],409);
        }

    }

    public function destroy($id)
    {
        $protagonista = Protagonista::find($id);

        try
        {
            if(is_null($protagonista))
            {
                return response()->json(['error'=>array(['codigo'=>404,'mensaje'=>'No se encuentra un protagonista con ese código.'])],404);
            }

            $protagonista->delete(); //no se usa el metodo eliminar pero queda ahi por documentacion
            return response()->json(['status'=>'no content','data'=>'Se ha eliminado correctamente'],204);
        }
        catch (Exception $e)
        {
            return response()->json(['status'=>'bad request','data'=>'Error al momento usar recurso del servidor','error'=>$e],400);
        }

    }
}
