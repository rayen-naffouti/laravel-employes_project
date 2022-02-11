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
                                <h3 class="panel-title">Add Personnel</h3>
                                <div class="tools">
                                    <a class="btn-link collapses panel-collapse" href="javascript:;"></a>
                                    <a class="btn-link reload" href="javascript:;"><i class="ti-reload"></i></a>	                                
                                </div>
                            </div>
                            
                            <div class="panel-body">
 
<div class="card">
  <div class="card-header"></div>
  <div class="card-body">
      
      <form action="{{ url('personnels') }}" method="post">
        {!! csrf_field() !!}
        <label>Matricule_Act</label></br>
        <input type="number" name="PERS_MAT_ACT" id="PERS_MAT_ACT" class="form-control" required></br>
        <label>First Name</label></br>
        <input type="text" name="PERS_NOM" id="PERS_NOM" class="form-control" required></br>
        <label>Last Name</label></br>
        <input type="text" name="PERS_PRENOM" id="PERS_PRENOM" class="form-control" required></br>

        
        <div class="form-group"> 
        <label>Date of Birth</label></br>
        <input type="date" name="PERS_DATE_NAIS" id="PERS_DATE_NAIS" class="form-control" required></br>
        </div>

        <div class="form-group">
            <label >Sex</label><br>
                    <select name="PERS_SEX_X" class="form-control custom-Select">
                        <option value="H">Homme</option>
                        <option value="F">Femme</option>
                    </select>
        </div></br>
<!-- 
        <label>PERS_SEX_X</label></br>
        <input type="text" name="PERS_SEX_X" id="PERS_SEX_X" class="form-control"></br> -->
        <!-- <label>PERS_CODE_QUALIF</label></br>
        <input type="number" name="PERS_CODE_QUALIF" id="PERS_CODE_QUALIF" class="form-control"></br> -->

        <div class="form-group">
            <label >Qualification</label><br>
                    <select name="PERS_CODE_QUALIF" class="form-control custom-Select">
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

        <!-- <label>PERS_NATURAGENT_93</label></br>
        <input type="number" name="PERS_NATURAGENT_93" id="PERS_NATURAGENT_93" class="form-control"></br> -->

        <div class="form-group">
            <label >Agent Nature</label><br>
                    <select name="PERS_NATURAGENT_93" class="form-control custom-Select">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
        </div></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
</div>
</div>
</div>
                    
 </div>
                    
                
</div>  <!--END: Content Wrap-->
            
</div>
