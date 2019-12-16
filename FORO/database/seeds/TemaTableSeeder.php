<?php

use Illuminate\Database\Seeder;

class TemaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('temas')->insert(
       		[
       			'title_tema'	=>'Laravel',
       			'tema'			  =>'Proyecto de forum con laravel',
       			'usuario_id'	=> 1,
            'fecha'       => date('Y-m-d H:i:s'),
       			'created_at' 	=> date('Y-m-d H:i:s'),
				    'updated_at' 	=> date('Y-m-d H:i:s'),
       		]
       );
    }
}
