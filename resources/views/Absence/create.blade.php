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
                                <h3 class="panel-title">Add absence</h3>
                                <div class="tools">
                                    <a class="btn-link collapses panel-collapse" href="javascript:;"></a>
                                    <a class="btn-link reload" href="javascript:;"><i class="ti-reload"></i></a>	                                
                                </div>
                            </div>
                            
                            <div class="panel-body">
 
<div class="card">
  <div class="card-header"></div>
  <div class="card-body">
      
      <form action="{{ url('absence') }}" method="post">
        {!! csrf_field() !!}
        
        <label>Personnel Full Name</label></br>
        <input type="number" name="ABS_NUMORD_93" id="ABS_NUMORD_93" class="form-control"></br>
        <label>Absence Nature</label></br>
        <input type="number" name="ABS_NAT_9" id="ABS_NAT_9" class="form-control"></br>
        <label>test</label></br>
        <input type="number" name="ABS_CAT_9" id="ABS_CAT_9" class="form-control"></br>
        <label>Start date</label></br>
        <input type="date" name="ABS_DATE_DEB" id="ABS_DATE_DEB" class="form-control"></br>

        <div class="form-group">
            <label >Start Period</label><br>
                    <select name="ABS_PERDEB_X" class="form-control custom-Select">
                        <option value="A">AM</option>
                        <option value="P">PM</option>
                    </select>
        </div></br>

        <!-- <label>Start Period</label></br>
        <input type="text" name="ABS_PERDEB_X" id="ABS_PERDEB_X" class="form-control"></br> -->


        <label>End date</label></br>
        <input type="date" name="ABS_DATE_FIN" id="ABS_DATE_FIN" class="form-control"></br>


        <div class="form-group">
            <label >End Period</label><br>
                    <select name="ABS_PERFIN_X" class="form-control custom-Select">
                        <option value="A">AM</option>
                        <option value="P">PM</option>
                    </select>
        </div></br>
        <!-- <label>Period End</label></br>
        <input type="text" name="ABS_PERFIN_X" id="ABS_PERFIN_X" class="form-control"></br> -->
        <label>Number of days</label></br>
        <input type="number" name="ABS_NBRJOUR_93" id="ABS_NBRJOUR_93" class="form-control"></br>
        <label>Accumulation</label></br>
        <input type="number" name="ABS_CUMULE_9" id="ABS_CUMULE_9" class="form-control"></br>

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