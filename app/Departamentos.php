<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamentos extends Model
{
    public $timestaps = false;

    protected $fillable = [
        'id', 'nombre'
    ];
}
