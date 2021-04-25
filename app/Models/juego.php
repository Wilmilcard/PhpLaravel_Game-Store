<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{
    //use HasFactory;
    public $timestamps = false;
    protected $fillable = ['id','nombre','ano','id_director','stock','precio'];
    protected $hidden = ['created_at','updated_at'];
}
