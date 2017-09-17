<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    protected $primaryKey = 'id_project';
    protected $table = 'project';
    protected $fillable = ['akun_id','nama_project','konten_project'];
    protected $with = ['images'];

    public function images(){
    	return $this->hasMany('App\project_images');
    }
}