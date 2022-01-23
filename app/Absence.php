<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    protected $primaryKey = 'ABS_MAT_95';
    public function natabse()
    {
        return $this->belongsTo(Natabse::class,'ABS_NAT_9','CODE_ABS');
    }

    public function personnel()
    {
        return $this->belongsTo(Personnel::class,'ABS_NUMORD_93','PERS_MAT_95');
    }
}
