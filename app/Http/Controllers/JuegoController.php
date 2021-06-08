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
}
