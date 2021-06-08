<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Cliente;
use Exception;

class ClienteController extends Controller
{
    public function index()
    {
        $cliente = Cache::remember('cachecliente', 20/60, function () {
            return Cliente::simplePaginate(50);
        });
        return response()->json(['status'=>'ok', 'siguiente'=>$cliente->nextPageUrl(),'anterior'=>$cliente->previousPageUrl(),'data'=>$cliente->items()],200);
    }

    public function show($nit)
    {
        $cliente = Cliente::where('nit',$nit)->get();
        if(is_null($cliente)){
            return response()->json(['error'=>array(['codigo'=>404,'mensaje'=>'No se encuentra un cliente con ese nit.'])],404);
        }
        return response()->json(['status'=>'ok','data'=>$cliente],200);
    }

    public function create(Request $request)
    {
		if (!$request->input('nombre') || !$request->input('nit') || !$request->input('telefono') || !$request->input('nacimiento'))
		{
			return response()->json(['error'=>array(['codigo'=>422,'mensaje'=>'Faltan datos agregar estado.'])],422);
		}

        try
        {
            $nuevoCliente = Cliente::create($request->all());
            return response(['status'=>'creado','data'=>$nuevoCliente],201);
        }
        catch(Exception $e)
        {
            return response()->json(['error'=>array(['codigo'=>304,'mensaje'=>'No se ha creado ningún dato.','error'=>$e])],304);
        }

    }

    public function edit() { }


    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);

        if(is_null($cliente))
        {
            return response()->json(['error'=>array(['codigo'=>404,'mensaje'=>'No se encuentra un cliente con ese código.'])],404);
        }

        $nombre=$request->input('nombre');
        $nit=$request->input('nit');
        $telefono=$request->input('telefono');
        $nacimiento=$request->input('nacimiento');

        try
        {
            if($request->method() === 'PATCH')
            {
                $bandera = false;
                if ($nombre) { $cliente->nombre = $nombre; $bandera=true; }
                if ($nit) { $cliente->nit = $nit; $bandera=true; }
                if ($telefono) { $cliente->telefono = $telefono; $bandera=true; }
                if ($nacimiento) { $cliente->nacimiento = $nacimiento; $bandera=true; }

                if($bandera)
                {
                    $cliente->save();
                    return response()->json(['status'=>'ok','data'=>$cliente], 200);
                }
                else
                {
                    return response()->json(['error'=>array(['codigo'=>304,'mensaje'=>'No se ha modificado ningún dato.'])],304);
                }
            }

            $cliente->update($request->all());
            return response(['status'=>'ok','data'=>$cliente],200);
        }
        catch(Exception $e)
        {
            return response()->json(['error'=>array(['codigo'=>409,'mensaje'=>'Conflicto al procesar peticion','error'=>$e])],409);
        }
    }

    public function destroy($id)
    {
        $cliente = Cliente::find($id);

        try
        {
            if(is_null($cliente))
            {
                return response()->json(['error'=>array(['codigo'=>404,'mensaje'=>'No se encuentra un cliente con ese código.'])],404);
            }

            $cliente->delete(); //no se usa el metodo eliminar pero queda ahi por documentacion
            return response()->json(['status'=>'no content','data'=>'Se ha eliminado correctamente'],204);
        }
        catch (Exception $e)
        {
            return response()->json(['status'=>'bad request','data'=>'Conflicto al procesar peticion','error'=>$e],409);
        }

    }

}
