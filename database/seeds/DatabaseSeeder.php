<?php

use Illuminate\Database\Seeder;
// use Database\seeds\PasajeroTableSeeder;
// use Database\seeds\ConductorTableSeeder;
// use Database\seeds\RutaTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	  // Model::unguard();

	  // $this->call(PasajeroTableSeeder::class);
	  // $this->call(ConductorTableSeeder::class);
	  $this->call(RutaTableSeeder::class);

	  // Model::reguard();
    }
}
