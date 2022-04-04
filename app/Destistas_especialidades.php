<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destistas_especialidades extends Model{
    
    protected $fillable = ['especialidade_id', 'dentista_id'];
}
