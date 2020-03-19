<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_web extends Model
{
    protected $table = "web";
    public $timestamps = false;
    protected $primaryKey = "id_content";
    protected $fillable = [
        'judul','deskripsi_1','deskripsi_2','foto_1','foto_2','foto_3' ,'foto_4' , 'foto_5'
    ];
    
}
