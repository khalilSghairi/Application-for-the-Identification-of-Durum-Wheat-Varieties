<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Descri_Classe extends Model
{
    use HasFactory;
    public function classe(){
        return $this->belongsTo(Classe::class,'classe_id');
    }
}
