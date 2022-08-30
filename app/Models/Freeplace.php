<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Freeplace extends Model
{
    use HasFactory;
    public function mast(){       
        return $this->belongsTo(Masters::class,'id_master','id');
    }
}
