<?php
/**
 * Created by PhpStorm.
 * User: administrado
 * Date: 28/04/2016
 * Time: 15:40
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class Acesso extends Model
{
    protected $table = 'acesso';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nome', 
        'descricao',
    ];
    public $timestamps = false;
}