<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{
    //use HasFactory;
    public $timestamps = false;
    protected $fillable = ['id','nombre','ano','stock','precio'];
    protected $hidden = ['created_at','updated_at','id_director'];

    public function director()
    {
        return $this->belongsTo(Director::class, 'id_director');
    }
}
