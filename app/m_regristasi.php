<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_regristasi extends Model
{
    protected $table = "regristasi";
    protected $primaryKey = "id_regristasi";
    protected $fillable = [
        'nama_kios','pemilik','alamat','kecamatan','email' ,'no_telpon' , 'desa' , 'ktp' , 'tdp' , 'siup'
    ];

    public function daerah(){
        return $this->belongsTo('App\m_kecamatan', 'kecamatan' ,'id_kecamatan');
    }
    public function tempat(){
        return $this->belongsTo('App\m_desa', 'desa' ,'id_desa');
    }
}
