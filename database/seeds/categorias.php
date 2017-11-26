<?php

use Illuminate\Database\Seeder;

class categorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Categoria')->insert([
        	'descripcion' => 'Hockey',
        ]);
        DB::table('Categoria')->insert([
        	'descripcion' => 'Basketball',
        ]);
        DB::table('Categoria')->insert([
        	'descripcion' => 'Handball',
        ]);
        DB::table('Categoria')->insert([
        	'descripcion' => 'Judo',
        ]);
    }
}
