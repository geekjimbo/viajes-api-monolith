<?php

use Illuminate\Database\Seeder;

class PasajeroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Pasajero::class, 20)->create()->each(function($p) {
        $p->save();
      });
    }
}
