<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alquiler_det extends Model
{
    //use HasFactory;
    public $timestamps = false;
    protected $fillable = ['id_alquiler','id_juego','cantidad','valor'];
}
