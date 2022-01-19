<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    protected $primarykey = 'QUALIF_CODE';
    public function personnels()
    {
        // On supposant que chaque soutenance est assistée par un ou plusieurs enseignants
        return $this->hasMany('App\Personnel','PERS_MAT_95');
    }
}
