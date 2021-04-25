<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Protagonista_juego extends Model
{
    //use HasFactory;
    public $timestamps = false;
    protected $fillable = ['id_juego','id_protagonista'];
    protected $hidden = ['created_at','updated_at'];
}
