<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dentista extends Model{
    protected $fillable = ['name', 'email', 'cro', 'cro_uf'];
}
