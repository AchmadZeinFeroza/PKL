<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_posisi extends Model
{
    protected $table = "posisi";
    protected $primaryKey = "id_posisi";
    protected $fillable = [
        'posisi'
    ];
    
    public function datauser(){
        return $this->hasMany('App\User', 'id');
    }
}
