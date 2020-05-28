<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = "id";
    protected $foreignKey = 'role';
    protected $fillable = [
        'name', 'email', 'password' , 'facebook' , 'wa' , 'alamat' , 'email' , 'nik' , 'foto' , 'role'
    ];
    public $timestamps = false;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
     'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function posisi(){
        return $this->belongsTo('App\m_posisi', 'role' ,'id_posisi');
    }

    public function getAvatar(){
        if(!$this->avatar){
            return asset('profil/default.png');
        }

        return asset('profil/'.$this->avatar);
    }

    public function setPasswordAttribute($password)
    {
    $this->attributes['password'] = $password;
    }
    
}
