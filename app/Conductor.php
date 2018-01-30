<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    protected $table = "conductores";
    protected $attributes = ["nombre" => null, "estado" => "inactivo"];
    protected $fillable = ["nombre", "estado"];

  	public function viajes()
  	{
   	   return $this->hasMany(Ruta::class);
  	}        
}
