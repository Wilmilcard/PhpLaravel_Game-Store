<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    //use HasFactory;
    public $timestamps = false;
    protected $fillable = ['id','nombre','id_marca'];
}
