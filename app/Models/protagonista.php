<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Protagonista extends Model
{
    //use HasFactory;
    public $timestamps = false;
    protected $fillable = ['id','nombre'];
    protected $hidden = ['created_at','updated_at'];
}
