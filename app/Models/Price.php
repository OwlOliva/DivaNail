<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;
    public function type(){
        return $this->belongsTo(Services::class,'type_services','id');
    }
    
}
