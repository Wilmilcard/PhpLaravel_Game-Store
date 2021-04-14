<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plataforma_juego extends Model
{
    //use HasFactory;
    public $timestamps = false;
    protected $fillable = ['id_juego','id_plataforma'];
}
