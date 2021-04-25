<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Alquiler;
use App\Models\Cliente;
use Exception;

class AlquilerController extends Controller
{
    public function index()
    {
        // $alquilers = Alquiler::all();
        // foreach($alquilers as $alquiler){
        //     $alquiler->estado = $alquiler->estado->nombre;
        // }
        // return response()->json($alquilers,200);

        // $alquiler = Cache::remember('cacheestados', 20/60, function () {
        //     return Alquiler::simplePaginate(50);
        // });
        // return response()->json(['status'=>'ok', 'siguiente'=>$alquiler->nextPageUrl(),'anterior'=>$alquiler->previousPageUrl(),'data'=>$alquiler->items()],200);

        return response()->json(Alquiler::with('estado','cliente')->get(),200);
    }
}
