<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CancionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('canciones')->insert([
		'nombre'=> 'paranoid',
		'grupo'=> 'black sabbath',
		]);
		
		DB::table('canciones')->insert([
		'nombre'=> 'painkiller',
		'grupo'=> 'judas priest',
		]);
    }
}
