<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    protected $primaryKey = 'QUALIF_CODE';
    public function personnels()
    {
        return $this->hasMany(Personnel::class,'QUALIF_CODE','PERS_CODE_QUALIF');
    }
}
