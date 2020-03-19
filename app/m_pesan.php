<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_pesan extends Model
{
    protected $table = "pesan";
    protected $primaryKey = "id_pesan";
    protected $fillable = [
        'nama' , 'gmail' , 'pesan'
    ];
}
