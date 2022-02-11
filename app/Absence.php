<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    protected $primaryKey = 'ABS_MAT_95';
    protected $fillable = ['ABS_NUMORD_93', 'ABS_NAT_9', 'ABS_CAT_9', 'ABS_DATE_DEB', 'ABS_PERDEB_X', 'ABS_DATE_FIN', 'ABS_PERFIN_X', 'ABS_NBRJOUR_93', 'ABS_CUMULE_9'];

    public function natabse()
    {
        return $this->belongsTo(Natabse::class,'ABS_NAT_9','CODE_ABS');
    }

    public function personnel()
    {
        return $this->belongsTo(Personnel::class,'ABS_NUMORD_93','PERS_MAT_95');
    }
}
