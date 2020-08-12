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

    public function search($filter=null){
$results = $this->where(function($query) use ($filter){
    if($filter){
        $query->where('cliente','LIKE',"%{$filter}%" or 'vendedor','LIKE',"%{$filter}%" or 'data','LIKE',"%{$filter}%")->orderBy("%{$filter}%", 'desc')->get()   ;
    }
});
 return $results;
    }

}
