<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etat extends Model
{
    use HasFactory;

    public function caractere(){
        return $this->belongsTo(Caractere::class,'caractere_id');
    }
}
