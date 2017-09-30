<?php

use Illuminate\Database\Seeder;

class ArticleCommentExample extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article_comments')->insert([
        	'id_comment' => '1',
        	'article_comment' => '1',
            'akun_id' => null,  
        	'nama_comment' => 'System',
        	'content_comment' => 'Is a default comment in first article post',
	        'flag_delete' => '0',
	        'created_at' => '2017-09-16 11:30:34',
	       	'updated_at' => '2017-09-16 11:30:34',
        ]);
    }
}
