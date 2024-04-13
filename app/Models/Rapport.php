<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Rapport extends Model
{
    use HasFactory;
    public function getDescriRapport()
    {
        return $this->hasMany(DescriRapport::class);
    }


    public function calcDescriRapport()
    {
        return $this->getDescriRapport()->select(DB::raw('sum(`value`*log(`value`)) as `total`'))->get();
    }


    
}
