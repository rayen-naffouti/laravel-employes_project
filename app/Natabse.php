<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Natabse extends Model
{
    protected $primaryKey = 'CODE_ABS';
    public function absences()
    {
        return $this->hasMany('App\Absence','ABS_MAT_95');
    }
}
