@extends('Personnel.layout')
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
                                <h3 class="panel-title">Panel title</h3>
                                <div class="tools">
                                    <a class="btn-link collapses panel-collapse" href="javascript:;"></a>
                                    <a class="btn-link reload" href="javascript:;"><i class="ti-reload"></i></a>	                                
                                </div>
                            </div>
                            
                            <div class="panel-body">
 
<div class="card">
  <div class="card-header">Add Personnel</div>
  <div class="card-body">
      
      <form action="{{ url('personnels') }}" method="post">
        {!! csrf_field() !!}
        <label>PERS_MAT_ACT</label></br>
        <input type="number" name="PERS_MAT_ACT" id="PERS_MAT_ACT" class="form-control"></br>
        <label>PERS_NOM</label></br>
        <input type="text" name="PERS_NOM" id="PERS_NOM" class="form-control"></br>
        <label>PERS_PRENOM</label></br>
        <input type="text" name="PERS_PRENOM" id="PERS_PRENOM" class="form-control"></br>
        <label>PERS_DATE_NAIS</label></br>
        <input type="date" name="PERS_DATE_NAIS" id="PERS_DATE_NAIS" class="form-control"></br>
        <label>PERS_SEX_X</label></br>
        <input type="text" name="PERS_SEX_X" id="PERS_SEX_X" class="form-control"></br>
        <label>PERS_CODE_QUALIF</label></br>
        <input type="number" name="PERS_CODE_QUALIF" id="PERS_CODE_QUALIF" class="form-control"></br>
        <label>PERS_NATURAGENT_93</label></br>
        <input type="number" name="PERS_NATURAGENT_93" id="PERS_NATURAGENT_93" class="form-control"></br>

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