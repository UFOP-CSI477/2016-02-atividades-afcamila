<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atleta extends Model
{
    protected $fillable = [
        'id', 'nome', 'login', 'senha',
    ];
}
