<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Director;
use Exception;

class DirectorController extends Controller
{
    public function index()
    {
        $director_content = response()->json(Director::with('marca')->get(),200);
        $director = Cache::remember('cachealquilers', 10/60, function () {
            return Director::simplePaginate(15);
        });
        return response()->json(['status'=>'ok', 'siguiente'=>$director->nextPageUrl(),'anterior'=>$director->previousPageUrl(),'data'=>$director_content],200);
    }

    public function show($id)
    {
        $director = response()->json(Director::with('marca')->where('id',$id)->get(),200);
        if(is_null($director)){
            return response()->json(['error'=>array(['codigo'=>404,'mensaje'=>'No se encuentra un alquiler con ese id.'])],404);
        }
        return response()->json(['status'=>'ok','data'=>$director],200);
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => ['required'],
            'id_marca' => ['required']
        ]);

        try
        {
            $nuevoDirector = Director::make($request->all());
            $nuevoDirector->marca()->associate($request->input("id_marca"));
            $nuevoDirector->save();
            return response(['status'=>'creado','data'=>$nuevoDirector],201);
        }
        catch(Exception $e)
        {
            return response()->json(['error'=>array(['codigo'=>404,'mensaje'=>$e])],404);
        }
    }

    public function update(Request $request, $id)
    {
        $director = Director::find($id);

        if(is_null($director))
        {
            return response()->json(['error'=>array(['codigo'=>404,'mensaje'=>'No se encuentra un director con ese código.'])],404);
        }

        try
        {
            $director->update($request->all());
            return response(['status'=>'ok','data'=>$director],200);
        }
        catch(Exception $e)
        {
            return response()->json(['error'=>array(['codigo'=>409,'mensaje'=>'Conflicto al procesar peticion','error'=>$e])],409);
        }
    }

    public function destroy($id)
    {
        $director = Director::find($id);

        try
        {
            if(is_null($director))
            {
                return response()->json(['error'=>array(['codigo'=>404,'mensaje'=>'No se encuentra un director con ese código.'])],404);
            }

            $director->delete(); //no se usa el metodo eliminar pero queda ahi por documentacion
            return response()->json(['status'=>'no content','data'=>'Se ha eliminado correctamente'],204);
        }
        catch (Exception $e)
        {
            return response()->json(['status'=>'bad request','data'=>'Conflicto al procesar peticion','error'=>$e],409);
        }

    }
}
