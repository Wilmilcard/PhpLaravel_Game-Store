<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Marca;
use Exception;

class MarcaController extends Controller
{
    public function index()
    {
        $marca = Cache::remember('marcacache', 20/60, function () {
            return Marca::simplePaginate(10);
        });
        return response()->json(['status'=>'ok', 'siguiente'=>$marca->nextPageUrl(),'anterior'=>$marca->previousPageUrl(),'data'=>$marca->items()],200);
    }

    public function show($id)
    {
        $marca = Marca::find($id);
        if(is_null($marca)){
            return response()->json(['error'=>array(['codigo'=>404,'mensaje'=>'No se encuentra una marca con ese código.'])],404);
        }
        return response()->json(['status'=>'ok','data'=>$marca],200);
    }

    public function create(Request $request)
    {
		if (!$request->input('nombre'))
		{
			return response()->json(['error'=>array(['codigo'=>422,'mensaje'=>'Faltan datos agregar estado.'])],422);
		}

        try
        {
            $nuevaMarca = Marca::create($request->all());
            return response(['status'=>'creado','data'=>$nuevaMarca],201);
        }
        catch(Exception $e)
        {
            return response()->json(['error'=>array(['codigo'=>304,'mensaje'=>'No se ha creado ningún dato.'])],304);
        }

    }

    public function update(Request $request, $id)
    {
        $marca = Marca::find($id);

        if(is_null($marca))
        {
            return response()->json(['error'=>array(['codigo'=>404,'mensaje'=>'No se encuentra una marca con ese código.'])],404);
        }

        $nombre=$request->input('nombre');

        try
        {
            if($request->method() === 'PATCH')
            {
                $bandera = false;
                if ($nombre)
                {
                    $marca->nombre = $nombre;
                    $bandera=true;
                }

                if($bandera)
                {
                    $marca->save();
                    return response()->json(['status'=>'ok','data'=>$marca], 200);
                }
                else
                {
                    return response()->json(['error'=>array(['codigo'=>304,'mensaje'=>'No se ha modificado ningún dato.'])],304);
                }
            }

            $marca->update($request->all());
            return response(['status'=>'ok','data'=>$marca],200);
        }
        catch(Exception $e)
        {
            return response()->json(['error'=>array(['codigo'=>409,'mensaje'=>'Conflicto al procesar peticion'])],409);
        }
    }

    public function destroy($id)
    {
        $marca = Marca::find($id);

        try
        {
            if(is_null($marca))
            {
                return response()->json(['error'=>array(['codigo'=>404,'mensaje'=>'No se encuentra una marca con ese código.'])],404);
            }

            $marca->delete(); //no se usa el metodo eliminar pero queda ahi por documentacion
            return response()->json(['status'=>'no content','data'=>'Se ha eliminado correctamente'],204);
        }
        catch (Exception $e)
        {
            return response()->json(['status'=>'bad request','data'=>'Error al momento usar recurso del servidor'],400);
        }

    }
}
