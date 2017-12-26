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

    public function getStockAttribute($value)
    {
        return $value/100;
    }           

    public function getStockMinimoAttribute($value)
    {
        return $value/100;
    } 

    public function setStockAttribute($value)
    {
        $this->attributes['stock'] = $value*100;
    }

    public function setStockMinimoAttribute($value)
    {
        $this->attributes['stock_minimo'] = $value*100;
    }

}
