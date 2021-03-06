<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    //use HasFactory;
    public $timestamps = false;
    protected $fillable = ['id','nombre'];
    protected $hidden = ['created_at','updated_at'];

    // public function alquiler_estado()
    // {
    //     return $this->belongsTo(Alquiler::class, 'id_estado');
    // }

    public function alquiler()
    {
        return $this->hasMany(Alquiler::class, 'Id');
    }
}
