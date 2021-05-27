<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Alquiler;
use App\Models\Estado;
use App\Models\Cliente;
use Exception;
use Illuminate\Http\Response;

class AlquilerController extends Controller
{
    public function index()
    {
        //return response()->json(Alquiler::all());

        $alquiler_content = response()->json(Alquiler::with('cliente','estado')->get(),200);
        $alquiler = Cache::remember('cachealquilers', 10/60, function () {
            return Alquiler::simplePaginate(15);
        });
        return response()->json(['status'=>'ok', 'siguiente'=>$alquiler->nextPageUrl(),'anterior'=>$alquiler->previousPageUrl(),'data'=>$alquiler_content],200);

    }

    public function show($id)
    {
        $alquiler = response()->json(Alquiler::with('cliente','estado')->where('id',$id)->get(),200);
        if(is_null($alquiler)){
            return response()->json(['error'=>array(['codigo'=>404,'mensaje'=>'No se encuentra un alquiler con ese id.'])],404);
        }
        return response()->json(['status'=>'ok','data'=>$alquiler],200);
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'valor_total' => ['required', 'unique:posts', 'max:255'],
            'fecha_reservacion' => ['required'],
            'fecha_devolucion' => ['required'],
            'id_estado' => ['required'],
            'id_cliente' => ['required']
        ]);

        try
        {
            $nuevoAlquiler = Alquiler::make($request->all());
            $nuevoAlquiler->estado()->associate($request->input("id_estado"));
            $nuevoAlquiler->cliente()->associate($request->input("id_cliente"));
            $nuevoAlquiler->save();
            return response(['status'=>'creado','data'=>$nuevoAlquiler],201);
        }
        catch(Exception $e)
        {
            return response()->json(['error'=>array(['codigo'=>404,'mensaje'=>$e])],404);
        }
    }

    public function update(Request $request, $id)
    {
        $alquiler = Alquiler::find($id);

        if(is_null($alquiler))
        {
            return response()->json(['error'=>array(['codigo'=>404,'mensaje'=>'No se encuentra un estado con ese código.'])],404);
        }

        $valor_total=$request->input('valor_total');
        $fecha_reservacion=$request->input('fecha_reservacion');
        $fecha_devolucion=$request->input('fecha_devolucion');
        $id_cliente=$request->input('id_cliente');
        $id_estado=$request->input('id_estado');

        try
        {
            if($request->method() === 'PATCH')
            {
                $alquiler->valor_total = $valor_total;
                $alquiler->fecha_reservacion = $fecha_reservacion;
                $alquiler->fecha_devolucion = $fecha_devolucion;
                $alquiler->id_cliente = $id_cliente;
                $alquiler->id_estado = $id_estado;

                $alquiler->save();
                return response()->json(['status'=>'ok','data'=>$alquiler], 200);
            }

            $alquiler->update($request->all());
            return response(['status'=>'ok','data'=>$alquiler],200);
        }
        catch(Exception $e)
        {
            return response()->json(['error'=>array(['codigo'=>409,'mensaje'=>'Conflicto al procesar peticion','error'=>$e])],409);
        }
    }
}
