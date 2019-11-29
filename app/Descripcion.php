<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Descripcion extends Model
{
    use SoftDeletes;

    protected $fillable = [
    	'salida_valijas_numero'
    ];

	protected $dates = ['deleted_at'];
}
