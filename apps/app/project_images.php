<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project_images extends Model
{
    protected $primaryKey = 'id_projectgambar';
    protected $table = 'project_images';
    protected $fillable = ['main_project','gambar_project'];
    protected $with = ['project'];

    public function project(){
    	return $this->belongsTo('App\project','main_project','id_project');
    }
}
