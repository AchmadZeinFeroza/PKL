<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_kios extends Model
{
    protected $table = "kios";
    protected $primaryKey = "id_kios";
    protected $fillable = [
        'nama_kios','pemilik','alamat','kecamatan','desa','no_telpon' ,'kode' , 'spjb'
    ];

    public function daerah(){
        return $this->belongsTo('App\m_kecamatan', 'kecamatan' ,'id_kecamatan');
    }
    
}
