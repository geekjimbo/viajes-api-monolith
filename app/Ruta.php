<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruta extends Model
{
    protected $table = "rutas";
    protected $attributes = ["origen" => null, "destino" => null, "pasajero_id" =>null, "conductor_id" =>null];
    protected $fillable = ["origen", "destino", "pasajero_id", "conductor_id"];

  	public function conductor()
  	{
      	return $this->belongsTo(Conductor::class);
  	}    

  	public function pasajero()
  	{
      	return $this->belongsTo(Pasajero::class);
  	}    	
}
