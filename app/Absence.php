<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    protected $primarykey = 'ABS_MAT_95';
    public function natabse()
    {
        return $this->belongsTo('App\Natabse','CODE_ABS');
    }
}
