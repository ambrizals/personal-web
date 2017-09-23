<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class page extends Model
{
    protected $primaryKey = 'id_page';
    protected $table = 'page';
    protected $fillable = ['akun_id','judul_page','slug_page','konten_page','cover_page'];
    protected $with = ['User'];

    public function User(){
    	return $this->belongsTo('App\User','akun_id','id');
    }
}
