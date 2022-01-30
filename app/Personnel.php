<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    protected $primaryKey = 'PERS_MAT_95';
    protected $fillable = ['PERS_MAT_ACT', 'PERS_NOM', 'PERS_PRENOM', 'PERS_DATE_NAIS', 'PERS_SEX_X', 'PERS_CODE_QUALIF', 'PERS_NATURAGENT_93'];

    protected $softDelete = true;
    public function qualification()
    {
        return $this->belongsTo(Qualification::class,'PERS_CODE_QUALIF','QUALIF_CODE');
       // return $this->belongsTo('App\Qualification','QUALIF_CODE');
    }
    public function natureagent()
    {
        //return $this->belongsTo('App\Natureagent','NATAGENT_CODE_93');
        return $this->belongsTo(Natureagent::class,'PERS_NATURAGENT_93','NATAGENT_CODE_93');
    }

    public function absences()
    {
        return $this->hasMany(Personne::class,'PERS_MAT_95','ABS_NUMORD_93');
    }
}
