<?php

use Illuminate\Database\Seeder;

class PersonaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('personas')->insert(
       		[
       			'ci'				=>'8520355',
       			'nombres'			=>'Hidiberto Abrahan',
       			'apellidos'			=>'Secko Cruz',
       			'direccion'			=>'Potosi-Bolivia',
       			'telefono'			=>'+591 73862413',
       			'fecha_nacimiento'	=> date('1997-12-17'),
       			'created_at'		=> date('Y-m-d H:i:s'),
				'updated_at' 		=> date('Y-m-d H:i:s'),
       		]
       );
    }
}
