<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MateriaPrima extends Model
{
	protected $table   = 'materias_primas';
    public $timestamps = false; 

    public function proveedor()
    {
        return $this->belongsTo('App\Proveedor');
    }              
}
