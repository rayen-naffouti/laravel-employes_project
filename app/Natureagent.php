<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Natureagent extends Model
{
    protected $primarykey = 'NATAGENT_CODE_93';
    public function personnels()
    {
        return $this->hasMany('App\Personnel','PERS_MAT_95');
    }
}
