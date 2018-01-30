<?php

use Illuminate\Database\Seeder;

class ConductorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Conductor::class, 20)->create()->each(function($c) {
        $c->save();
      });
    }
}
