<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_regristasi extends Model
{
    protected $table = "regristasi";
    protected $primaryKey = "id_regristasi";
    protected $fillable = [
        'nama_kios','pemilik','alamat','kecamatan','email' ,'no_telpon' , 'ktp' , 'tdp' , 'siup'
    ];
}
