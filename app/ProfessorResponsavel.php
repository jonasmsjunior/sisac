<?php
/**
 * Created by PhpStorm.
 * User: administrado
 * Date: 28/04/2016
 * Time: 15:36
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class ProfessorResponsavel extends Model
{
    protected $table = 'professor_responsavel';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nome', 'matricula',
    ];
    public $timestamps = false;
}