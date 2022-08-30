<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masters extends Model
{
    use HasFactory;
    // public $timestamps = false;

    public function master(){
        return $this->hasMany(Freeplace::class,'id_master','id');
    }
}
