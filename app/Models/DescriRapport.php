<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DescriRapport extends Model
{
    use HasFactory;

    public function caractere(){
        return $this->belongsTo(Caractere::class,'caractere_id');
    }

    public function rapport(){
        return $this->belongsTo(Rapport::class,'rapport_id');
    }
}
