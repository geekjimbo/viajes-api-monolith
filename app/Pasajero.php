<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasajero extends Model
{
    protected $table = "pasajeros";
    protected $attributes = ["nombre" => null];
    protected $fillable = ["nombre"];

  	public function viajes()
  	{
   	   return $this->hasMany(Ruta::class);
  	}    
}
