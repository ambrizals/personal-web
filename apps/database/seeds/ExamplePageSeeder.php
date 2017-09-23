<?php

use Illuminate\Database\Seeder;

class ExamplePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page')->insert([
        	'id_page' => '1',
        	'akun_id' => '1',
        	'judul_page' => 'Hello World',
        	'slug_page' => 'hello-world',
        	'konten_page' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac felis diam. Ut vel est sit amet dolor vehicula semper vel non sem. Phasellus vulputate, ex et fermentum tincidunt, lectus nisi venenatis nunc, scelerisque cursus metus sapien a felis. Nunc mollis auctor commodo. Donec condimentum justo ac nulla mattis, in lobortis lectus congue. Vivamus eget turpis massa. Donec id feugiat enim, at euismod neque. Etiam sagittis risus a augue tristique semper. Vestibulum ut varius neque. Vivamus tincidunt pharetra risus eu iaculis. Mauris euismod, enim ac imperdiet malesuada, risus massa rutrum elit, sit amet porttitor elit odio eu diam. Maecenas magna nibh, bibendum id tincidunt id, cursus et quam.</p>',
        	'cover_page' => 'default_cover.jpg',
        	'flag_delete' => '0',
        	'created_at' => '2017-09-16 11:30:34',
        	'updated_at' => '2017-09-16 11:30:34',
        ]);
    }
}
