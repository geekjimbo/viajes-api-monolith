<?php

namespace App\Http\Requests;

use Validator;
use App\Pasajero;
use App\Conductor;
use App\Ruta;


class StoreConductor
{

    private $response;
    public function __construct()
    {
        $this->log = new \Log;
        $this->response = new \stdClass;
        $this->response->code = 200;
        $this->response->message = "";
    }

    public function rules($arr){
       $this->log::alert('inside rules ....');
       $this->log::alert(json_encode($arr));

       $validator = Validator::make($arr   , [
         "nombre"  => "required"
       ]);

       if ($validator->fails()) {
         $this->response->code = 403;
         $this->response->message = $validator->errors();
         return $this->response;
       }

       return $this->response;
    }

    public function persist($arr){
       $this->log::alert('inside persist ....');
       $this->log::alert(json_encode($arr));

       $conductor_arr = [
         "nombre"  => $arr["nombre"]
       ];

       $conductor = Conductor::create($conductor_arr);

       if (is_null($conductor)) {
         $this->response->code = 403;
         $this->response->message = "Conductor no creado, error en el API";
         return $this->response;
       }

       return $this->response;
    }    

}
