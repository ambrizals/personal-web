<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    protected $primaryKey = 'id_project';
    protected $table = 'project';
    protected $fillable = ['akun_id','nama_project','konten_project'];
    protected $with = ['images','User'];

    public function images(){
    	return $this->hasMany('App\project_images');
    }
    public function User(){
    	return $this->belongsTo('App\User','akun_id','id');
    }
}