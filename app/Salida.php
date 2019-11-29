<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Salida extends Model
{
    use SoftDeletes;

    protected $fillable = [
    	'salida_valijas_numero'
    ];

	protected $dates = ['deleted_at'];
}