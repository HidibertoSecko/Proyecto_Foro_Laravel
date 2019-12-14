<?php

use Illuminate\Database\Seeder;

class OpinionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('opiniones')->insert(
       		[
       			'categoria'		=>'Tecnologia',
       			'opiniones'		=>'Laravel es una buena herramienta para realizar proyectos de ese tipo',
       			'usuario_id'	=> 1,
       			'temas_id'		=> 1,
       			'created_at' 	=> date('Y-m-d H:i:s'),
				'updated_at' 	=> date('Y-m-d H:i:s'),
       		]
       );
    }
}
