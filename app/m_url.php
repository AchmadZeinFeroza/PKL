<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_url extends Model
{
    protected $table = "url";
    protected $primaryKey = "id_url";
    protected $fillable = [
        'facebook','instagram','twitter','wa','no_perusahaan'
    ];
}
