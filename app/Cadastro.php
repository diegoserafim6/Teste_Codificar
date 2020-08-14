<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{

    public $timestamps = false;
    public $touch = false;


    protected $fillable = [
        'id',  'vendedor','descricao','valor','data' ,'cliente'

    ];



}
