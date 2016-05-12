<?php
/**
 * Created by PhpStorm.
 * User: administrado
 * Date: 28/04/2016
 * Time: 15:45
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class AcessoUsuario extends Model
{
    protected $table = 'acesso';

    protected $primaryKey = [
        'acesso_id', 'usuario_login',
    ];
    public $timestamps = false;
}