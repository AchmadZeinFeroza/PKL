<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_kecamatan extends Model
{
    protected $table = "kecamatan";
    protected $primaryKey = "id_kecamatan";
    protected $fillable = [
        'kecamatan'
    ];
     public function dataDesa(){
        return $this->hasMany('App\m_desa', 'id_kecamatan' , 'kecamatan');
    }
     public function dataKios(){
        return $this->hasMany('App\m_desa', 'id_kecamatan' , 'kecamatan');
    }
     public function dataRegristasi(){
        return $this->hasMany('App\m_regristasi', 'id_kecamatan' , 'kecamatan');
    }
    public function dataPenolakan(){
        return $this->hasMany('App\m_penolakan', 'id_kecamatan' , 'kecamatan');
    }
}
