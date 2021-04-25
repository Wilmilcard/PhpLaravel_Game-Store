<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alquiler extends Model
{
    //use HasFactory;
    public $timestamps = false;
    protected $fillable = ['id','id_cliente','valor_total','estado','fecha_reservacion','fecha_devolucion'];
    protected $hidden = ['created_at','updated_at'];
}
