<?php

use Illuminate\Database\Seeder;

class RutaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Ruta::class, 20)->create()->each(function($r) {
        $r->save();
      });
    }
}
