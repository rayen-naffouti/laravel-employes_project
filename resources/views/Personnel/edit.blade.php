@extends('Personnel.layout')
@section('content')
 
<div class="card">
  <div class="card-header">PERS_MAT_95 : {{ $personnel->PERS_MAT_95 }} Page</div>
  <div class="card-body">
      
  <form action="{{ url('personnels/' .$personnel->PERS_MAT_95) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="PERS_MAT_95" id="PERS_MAT_95" value="{{ $personnel->PERS_MAT_95 }}" id="PERS_MAT_95" />
        <label>PERS_MAT_ACT</label></br>
        <input type="number" name="PERS_MAT_ACT" id="PERS_MAT_ACT" value="{{ $personnel->PERS_MAT_ACT }}" class="form-control"></br>
        <label>PERS_NOM</label></br>
        <input type="text" name="PERS_NOM" id="PERS_NOM" value="{{ $personnel->PERS_NOM }}" class="form-control"></br>
        <label>PERS_PRENOM</label></br>
        <input type="text" name="PERS_PRENOM" id="PERS_PRENOM" value="{{ $personnel->PERS_PRENOM }}" class="form-control"></br>
        <label>PERS_DATE_NAIS</label></br>
        <input type="date" name="PERS_DATE_NAIS" id="PERS_DATE_NAIS" value="{{ $personnel->PERS_DATE_NAIS }}" class="form-control"></br>
        <label>PERS_SEX_X</label></br>
        <input type="text" name="PERS_SEX_X" id="PERS_SEX_X" value="{{ $personnel->PERS_SEX_X }}" class="form-control"></br>
        <label>PERS_CODE_QUALIF</label></br>
        <input type="number" name="PERS_CODE_QUALIF" id="PERS_CODE_QUALIF" value="{{ $personnel->PERS_CODE_QUALIF }}" class="form-control"></br>
        <label>PERS_NATURAGENT_93</label></br>
        <input type="number" name="PERS_NATURAGENT_93" id="PERS_NATURAGENT_93" value="{{ $personnel->PERS_NATURAGENT_93 }}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    
  </form>
  </div>
</div>
 
@stop
