<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends  Authenticatable
{
    protected $table = 'usuario';

    protected $fillable = [
        'login', 'email', 'senha','imagem',
    ];

    protected $hidden = [
        'senha', 'remember_token',
    ];

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->senha;
    }


    public function getReminderEmail()
    {
        return $this->email;
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }


    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }


    public function getRememberTokenName()
    {
        return 'remember_token';
    }
    public $timestamps = false;
}
