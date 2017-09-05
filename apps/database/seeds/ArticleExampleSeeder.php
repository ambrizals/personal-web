<?php

use Illuminate\Database\Seeder;

class ArticleExampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_article')->insert([
          'id_category' => '1',
          'nama_kategori' => 'Default',
          'flag_delete' => '0',
        ]);
        DB::table('article')->insert([
          'id_article' => '1',
          'akun_id' => '1',
          'judul_article' => 'Hello World !',
          'slug_article' => 'hello-world',
          'kategori_article' => '1',
          'konten_article' => '<p>Hello World, ini postingan pertama kamu.</p>',
          'thumbnail_article' => 'default_cover.jpg',
          'flag_delete' => '0',
        ]);
    }
}
