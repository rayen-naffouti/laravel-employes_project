@extends('layout')
<div class="main-container">    <!-- START: Main Container -->
            
            <div class="page-header">
                <h1>Data Tables <small>Bootstrap Data Table</small></h1>
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/') }}">Tables</a></li>
                    <li class="active">Data Table</li>
                </ol>
            </div>
            
            <div class="content-wrap">  <!--START: Content Wrap-->
                
                <div class="row">
                    
                    
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Edit Personnel</h3>
                                <div class="tools">
                                    <a class="btn-link collapses panel-collapse" href="javascript:;"></a>
                                    <a class="btn-link reload" href="javascript:;"><i class="ti-reload"></i></a>	                                
                                </div>
                            </div>
                            
                            <div class="panel-body">          
 
                            
<div class="card">
  <div class="card-header">{{ $personnel->PERS_MAT_95 }} : {{ $personnel->PERS_NOM }} {{ $personnel->PERS_PRENOM }} Page</div><br>
  <div class="card-body">
      
  <form action="{{ url('personnels/' .$personnel->PERS_MAT_95) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="PERS_MAT_95" id="PERS_MAT_95" value="{{ $personnel->PERS_MAT_95 }}" id="PERS_MAT_95" />
        <label>Matricule_Act</label></br>
        <input type="number" name="PERS_MAT_ACT" id="PERS_MAT_ACT" value="{{ $personnel->PERS_MAT_ACT }}" class="form-control"></br>
        <label>First Name</label></br>
        <input type="text" name="PERS_NOM" id="PERS_NOM" value="{{ $personnel->PERS_NOM }}" class="form-control"></br>
        <label>Last Name</label></br>
        <input type="text" name="PERS_PRENOM" id="PERS_PRENOM" value="{{ $personnel->PERS_PRENOM }}" class="form-control"></br>
        <label>Date of Birth</label></br>
        <input type="date" name="PERS_DATE_NAIS" id="PERS_DATE_NAIS" value="{{ $personnel->PERS_DATE_NAIS }}" class="form-control"></br>
        @if ($personnel->PERS_SEX_X == 'H')
        <div class="form-group">
            <label >Sex</label><br>
                    <select name="PERS_SEX_X" class="form-control custom-Select">
                        <option value="H">Homme</option>
                        <option value="F">Femme</option>
                    </select>
        </div></br>
        @else
        <div class="form-group">
            <label >Sex</label><br>
                    <select name="PERS_SEX_X" class="form-control custom-Select">
                        <option value="F">Femme</option>
                        <option value="H">Homme</option>
                    </select>
        </div></br>
        @endif
        
        <div class="form-group">
            <label >Qualification</label><br>
                    <select name="PERS_CODE_QUALIF" class="form-control custom-Select">
                        <option value="{{ $personnel->PERS_CODE_QUALIF }}"></option>
                        <option value="1">ingenieur</option>
                        <option value="2">financier</option>
                        <option value="3">gestionnaire</option>
                        <option value="4">PDG</option>
                        <option value="5">RH</option>
                        <option value="6">technicien informatique</option>
                        <option value="7">commercial senior</option>
                        <option value="8">assistante administrative</option>
                        <option value="9">manœuvre</option>
                        <option value="10">directeur</option>
                    </select>
        </div></br>
        <div class="form-group">
            <label >Agent Nature</label><br>
                    <select name="PERS_NATURAGENT_93" class="form-control custom-Select">
                      <option value="{{ $personnel->PERS_NATURAGENT_93 }}"></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
        </div></br>
        <!-- <label>PERS_SEX_X</label></br>
        <input type="text" name="PERS_SEX_X" id="PERS_SEX_X" value="{{ $personnel->PERS_SEX_X }}" class="form-control"></br> -->
        <!-- <label>PERS_CODE_QUALIF</label></br>
        <input type="number" name="PERS_CODE_QUALIF" id="PERS_CODE_QUALIF" value="{{ $personnel->PERS_CODE_QUALIF }}" class="form-control"></br> -->
        <!-- <label>PERS_NATURAGENT_93</label></br>
        <input type="number" name="PERS_NATURAGENT_93" id="PERS_NATURAGENT_93" value="{{ $personnel->PERS_NATURAGENT_93 }}" class="form-control"></br> -->
        <input type="submit" value="Update" class="btn btn-success"></br>
    
  </form>
  </div>
</div>

                            </div>
                        </div>
                    </div>
                    
                </div>
                    
                
            </div>  <!--END: Content Wrap-->
            
        </div>
 

