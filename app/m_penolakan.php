<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_penolakan extends Model
{
    protected $table = "kios_ditolak";
    protected $primaryKey = "id_penolakan";
    protected $fillable = [
        'nama_kios','pemilik','alamat','kecamatan','email' ,'no_telpon' , 'ktp' , 'tdp' , 'siup'
    ];
}
