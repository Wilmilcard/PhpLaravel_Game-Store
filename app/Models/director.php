<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    //use HasFactory;
    public $timestamps = false;
    protected $fillable = ['id','nombre'];
    protected $hidden = ['created_at','updated_at','id_marca'];

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'id_marca');
    }
}
