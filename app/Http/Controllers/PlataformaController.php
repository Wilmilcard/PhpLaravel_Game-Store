<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Plataforma;
use Exception;

class PlataformaController extends Controller
{
    public function index()
    {
        $plataforma = Cache::remember('cacheestados', 20/60, function () {
            return Plataforma::simplePaginate(10);
        });
        return response()->json(['status'=>'ok', 'siguiente'=>$plataforma->nextPageUrl(),'anterior'=>$plataforma->previousPageUrl(),'data'=>$plataforma->items()],200);
    }

    public function show($id)
    {
        $plataforma = Plataforma::find($id);
        if(is_null($plataforma)){
            return response()->json(['error'=>array(['codigo'=>404,'mensaje'=>'No se encuentra una plataforma con ese código.'])],404);
        }
        return response()->json(['status'=>'ok','data'=>$plataforma],200);
    }

    public function create(Request $request)
    {
		if (!$request->input('nombre'))
		{
			return response()->json(['error'=>array(['codigo'=>422,'mensaje'=>'Faltan datos para agregar plataforma.'])],422);
		}

        try
        {
            $nuevaPlataforma = Plataforma::create($request->all());
            return response(['status'=>'creado','data'=>$nuevaPlataforma],201);
        }
        catch(Exception $e)
        {
            return response()->json(['error'=>array(['codigo'=>304,'mensaje'=>'No se ha creado ningún dato.','error'=>$e])],304);
        }

    }

    public function edit() { }


    public function update(Request $request, $id)
    {
        $plataforma = Plataforma::find($id);

        if(is_null($plataforma))
        {
            return response()->json(['error'=>array(['codigo'=>404,'mensaje'=>'No se encuentra una plataforma con ese código.'])],404);
        }

        $nombre=$request->input('nombre');

        try
        {
            if($request->method() === 'PATCH')
            {
                $bandera = false;
                if ($nombre)
                {
                    $plataforma->nombre = $nombre;
                    $bandera=true;
                }

                if($bandera)
                {
                    $plataforma->save();
                    return response()->json(['status'=>'ok','data'=>$plataforma], 200);
                }
                else
                {
                    return response()->json(['error'=>array(['codigo'=>304,'mensaje'=>'No se ha modificado ningún dato.'])],304);
                }
            }

            $plataforma->update($request->all());
            return response(['status'=>'ok','data'=>$plataforma],200);
        }
        catch(Exception $e)
        {
            return response()->json(['error'=>array(['codigo'=>409,'mensaje'=>'Conflicto al procesar peticion','error'=>$e])],409);
        }
    }

    public function destroy($id)
    {
        $plataforma = Plataforma::find($id);

        try
        {
            if(is_null($plataforma))
            {
                return response()->json(['error'=>array(['codigo'=>404,'mensaje'=>'No se encuentra una plataforma con ese código.'])],404);
            }

            $plataforma->delete(); //no se usa el metodo eliminar pero queda ahi por documentacion
            return response()->json(['status'=>'no content','data'=>'Se ha eliminado correctamente'],204);
        }
        catch (Exception $e)
        {
            return response()->json(['status'=>'bad request','data'=>'Conflicto al procesar peticion','error'=>$e],409);
        }
    }
}
