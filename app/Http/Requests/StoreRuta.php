<?php

namespace App\Http\Requests;

use Validator;
use App\Pasajero;
use App\Conductor;
use App\Ruta;


class StoreRuta
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
         "pasajero_id"  => "required|numeric|exists:pasajeros,id",
         "conductor_id" => "required|numeric|exists:conductores,id",
         "origen" => "required",
         "destino" => "required"
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

       $ruta_arr = [
         "pasajero_id"  => $arr["pasajero_id"],
         "conductor_id" => $arr["conductor_id"],
         "origen"       => $arr["origen"],
         "destino"      => $arr["destino"]
       ];

       $ruta = Ruta::create($ruta_arr);

       if (is_null($ruta)) {
         $this->response->code = 403;
         $this->response->message = "Ruta no creada, error en el API";
         return $this->response;
       }

       return $this->response;
    }    

}
