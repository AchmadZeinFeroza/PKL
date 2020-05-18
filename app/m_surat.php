<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_surat extends Model
{
    protected $table = "surat";
    protected $primaryKey = 'id_surat';
    protected $fillable = [
        'surat','tanggal_cetak','user'
    ];

}
