<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_desa extends Model
{
    protected $table = "desa";
    protected $primaryKey = "id_desa";
    protected $fillable = [
        'desa','kecamatan'
    ];
    public function desa(){
        return $this->belongsTo('App\m_kecamatan', 'kecamatan' ,'id_kecamatan');
    }
    public function desaKios(){
        return $this->hasMany('App\m_kios', 'id_desa' , 'desa');
    }
    public function dataRegristasi(){
        return $this->hasMany('App\m_regristasi', 'id_desa' , 'desa');
    }
}
