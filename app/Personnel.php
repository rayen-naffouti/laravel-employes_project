<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    protected $primarykey = 'PERS_MAT_95';
    public function qualification()
    {
        return $this->belongsTo('App\Qualification','QUALIF_CODE');
    }
    public function natureagent()
    {
        return $this->belongsTo('App\Natureagent','NATAGENT_CODE_93');
    }
}
