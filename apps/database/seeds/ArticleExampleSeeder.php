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
          'slug_kategori' => 'default',
          'flag_delete' => '0',
          'created_at' => '2017-09-16 11:30:34',
          'updated_at' => '2017-09-16 11:30:34',
        ]);
        DB::table('article')->insert([
          'id_article' => '1',
          'akun_id' => '1',
          'judul_article' => 'Hello World !',
          'slug_article' => 'hello-world',
          'kategori_article' => '1',
          'konten_article' => '<p>Hello World, ini postingan pertama kamu.</p>',
          'cover_article' => 'default_cover.jpg',
          'thumbnail_article' => 'default_cover.jpg',
          'flag_delete' => '0',
          'created_at' => '2017-09-16 11:30:34',
          'updated_at' => '2017-09-16 11:30:34',
        ]);
    }
}
