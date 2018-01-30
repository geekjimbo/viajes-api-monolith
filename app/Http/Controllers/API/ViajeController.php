<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Http\Requests\StorePasajero;
use App\Http\Requests\StoreConductor;
use App\Http\Requests\StoreRuta;
use App\Pasajero;
use App\Conductor;
use App\Ruta;

class ViajeController extends Controller
{

    public  $successStatus = 200;

    private $StorePasajero;
    private $StoreConductor;
    private $StoreRuta;

    public function __construct()
    {
        $this->log = new \Log;
        $this->StorePasajero = new StorePasajero;
        $this->StoreConductor = new StoreConductor;
        $this->StoreRuta = new StoreRuta;
    }

    public function listar_rutas(){

      $res = Ruta::orderBy('created_at', 'desc')->get();

       # chek for nulls
       if (is_null($res)) {
         return response()->json(['error'=>'No Content due err in DB Query'], 403);
       }

       # return success response
       return response()->json(['rutas'=>$res], $this->successStatus);
    }

    public function listar_pasajeros(){

      $res = Pasajero::orderBy('created_at', 'desc')->get();

       # chek for nulls
       if (is_null($res)) {
         return response()->json(['error'=>'No Content due err in DB Query'], 403);
       }

       # return success response
       return response()->json(['rutas'=>$res], $this->successStatus);
    }

    public function listar_conductores(){

      $res = Conductor::orderBy('created_at', 'desc')->get();

       # chek for nulls
       if (is_null($res)) {
         return response()->json(['error'=>'No Content due err in DB Query'], 403);
       }

       # return success response
       return response()->json(['rutas'=>$res], $this->successStatus);
    }


    public function store_ruta(Request $request) {
      $arr = $request->all();
      $res = $this->StoreRuta->rules($arr);

      if ($res->code != 200) {
        return response()->json(['error'=>$res->message], 403);
      }

      $res = $this->StoreRuta->persist($arr);

       # return success response
       return response()->json(['message'=>$res], $this->successStatus);
    }


    public function store_pasajero(Request $request) {
      $arr = $request->all();
      $res = $this->StorePasajero->rules($arr);

      if ($res->code != 200) {
        return response()->json(['error'=>$res->message], 403);
      }

      $res = $this->StorePasajero->persist($arr);

       # return success response
       return response()->json(['message'=>$res], $this->successStatus);
    }

    public function store_conductor(Request $request) {
      $arr = $request->all();
      $res = $this->StoreConductor->rules($arr);

      if ($res->code != 200) {
        return response()->json(['error'=>$res->message], 403);
      }

      $res = $this->StoreConductor->persist($arr);

       # return success response
       return response()->json(['message'=>$res], $this->successStatus);
    }    
}
