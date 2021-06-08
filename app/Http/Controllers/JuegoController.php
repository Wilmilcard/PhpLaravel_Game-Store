<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Juego;
use Exception;

class JuegoController extends Controller
{
    public function index()
    {
        $juego_content = response()->json(Juego::with('director')->get(),200);
        $juego = Cache::remember('cachejuegos', 10/60, function () {
            return Juego::simplePaginate(15);
        });
        return response()->json(['status'=>'ok', 'siguiente'=>$juego->nextPageUrl(),'anterior'=>$juego->previousPageUrl(),'data'=>$juego_content],200);
    }

    public function show($id)
    {
        $juego = response()->json(Juego::with('director')->where('id',$id)->get(),200);
        if(is_null($juego)){
            return response()->json(['error'=>array(['codigo'=>404,'mensaje'=>'No se encuentra un juego con ese id.'])],404);
        }
        return response()->json(['status'=>'ok','data'=>$juego],200);
    }

    public function create(Request $request)
    {

        if (!$request->input('nombre') || !$request->input('ano') || !$request->input('stock') || !$request->input('precio') || !$request->input('id_director'))
		{
			return response()->json(['error'=>array(['codigo'=>422,'mensaje'=>'Faltan datos para agregar juego.'])],422);
		}

        try
        {
            $nuevoJuego = Juego::make($request->all());
            $nuevoJuego->director()->associate($request->input("id_director"));
            $nuevoJuego->save();
            return response(['status'=>'creado','data'=>$nuevoJuego],201);
        }
        catch(Exception $e)
        {
            return response()->json(['error'=>array(['codigo'=>404,'mensaje'=>$e])],404);
        }
    }

    public function update(Request $request, $id)
    {
        $juego = Juego::find($id);

        if(is_null($juego))
        {
            return response()->json(['error'=>array(['codigo'=>404,'mensaje'=>'No se encuentra un juego con ese código.'])],404);
        }

        $nombre=$request->input('nombre');
        $ano=$request->input('ano');
        $stock=$request->input('stock');
        $precio=$request->input('precio');
        $id_director=$request->input('id_director');

        try
        {
            if($request->method() === 'PATCH')
            {
                $juego->nombre = $nombre;
                $juego->ano = $ano;
                $juego->stock = $stock;
                $juego->precio = $precio;
                $juego->id_director = $id_director;

                $juego->save();
                return response()->json(['status'=>'ok','data'=>$juego], 200);
            }

            $juego->update($request->all());
            return response(['status'=>'ok','data'=>$juego],200);
        }
        catch(Exception $e)
        {
            return response()->json(['error'=>array(['codigo'=>409,'mensaje'=>'Conflicto al procesar peticion','error'=>$e])],409);
        }
    }
}
