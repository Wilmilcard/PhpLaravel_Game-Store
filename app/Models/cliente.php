<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //use HasFactory;
    public $timestamps = false;
    protected $fillable = ['id','nombre','nit','telefono','nacimiento'];
    protected $hidden = ['created_at','updated_at'];
}
