<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alquiler extends Model
{
    //use HasFactory;
    public $timestamps = false;
    protected $fillable = ['id','valor_total','fecha_reservacion','fecha_devolucion'];
    protected $hidden = ['created_at','updated_at','id_estado','id_cliente'];

    public function estado()
    {
        return $this->hasOne(Estado::class, 'id', 'id_estado');
    }

    public function cliente()
    {
        return $this->hasOne(Cliente::class, 'id', 'id_cliente');
    }
}
