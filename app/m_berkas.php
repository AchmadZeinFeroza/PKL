<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_berkas extends Model
{
    protected $table = "berkas";
    protected $primaryKey = "id_berkas";
    protected $fillable = [
        'berkas'
    ];
}
