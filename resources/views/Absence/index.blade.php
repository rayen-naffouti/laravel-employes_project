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
                                <h3 class="panel-title">Absences List</h3>
                                <div class="tools">
                                    <a class="btn-link collapses panel-collapse" href="javascript:;"></a>
                                    <a class="btn-link reload" href="javascript:;"><i class="ti-reload"></i></a>	                                
                                </div>
                            </div>
                            
                            <div class="panel-body">
                            <a href="{{ url('/absence/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                <i class="fa fa-plus" aria-hidden="true"></i> Add New
                </a>
                                <table class="table table-bordered table-dataTable"
                                data-toggle="table"
        data-search="true"
        data-search-align="left"
        data-show-columns="true"
        data-show-toggle="true"
        data-show-fullscreen="true" 
        data-pagination-pre-text="previous"
        data-pagination-next-text="next"
        data-pagination-h-align="right"
        data-page-list="[10,20,30,0,50,All]"
                >
        
                <thead>
                <tr>
                <th colspan="9" data-align="center">Absences List</th>
                </tr>
            
                <tr>
                <th data-field="ABS_MAT_95" data-sortable="true" data-switchable="false">Matricule</th>
                <th data-field="PERS_NOM + PERS_PRENOM " data-sortable="true" data-switchable="false">Full Name</th>
                <th data-field="LIBELLE_ABS" data-sortable="true">Absence Nature</th>
                <th data-field="ABS_DATE_DEB" data-sortable="true">Start date</th>
                <th data-field="ABS_PERDEB_X" data-sortable="true">Start Period</th>
                <th data-field="ABS_DATE_FIN" data-sortable="true">End date</th>
                <th data-field="ABS_PERFIN_X" data-sortable="true">Period End</th>
                <th data-field="ABS_NBRJOUR_93 " data-sortable="true">Number of days</th>
                 <th data-field="ABS_CUMULE_9 " data-sortable="true">Accumulation</th>
              <!--  <th  data-sortable="true">action </th> -->
                </tr>
                </thead>
                <tbody>
                @foreach ($absences as $absence )
                <tr>
                <td >{{ $absence->ABS_MAT_95  }}</td>
                <td >{{ $absence->PERS_NOM  }} {{ $absence->PERS_PRENOM  }}</td>
                <td >{{ $absence->LIBELLE_ABS  }}</td>
                <td >{{ $absence->ABS_DATE_DEB  }}</td>
                @if ($absence->ABS_PERDEB_X == 'P')
                    <td >PM</td>
                @else
                    <td >AM</td>
                @endif
                    <td > {{ $absence->ABS_DATE_FIN  }}</td>
                @if ($absence->ABS_PERFIN_X == 'P')
                    <td >PM</td>
                @else
                    <td >AM</td>
                @endif
                <td >{{ $absence->ABS_NBRJOUR_93  }}</td>
                <td >{{ $absence->ABS_CUMULE_9  }}</td>
                <!-- <td>
                    <a href="{{ url('/personnels/' . $absence->ABS_MAT_95) }}" title="View "><button class="btn btn-info btn-sm"> View </button></a> 
                    <a href="{{ url('/personnels/' . $absence->ABS_MAT_95 . '/edit') }}" title="Edit "><button class="btn btn-primary btn-sm"> Edit</button></a>
                    <form method="POST" action="{{ url('/personnels' . '/' . $absence->ABS_MAT_95) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)">Delete</button>
                    </form> 
                </td>  -->
                
                </tr>
                
             
                @endforeach
                        
                </tbody>
            
                                </table>
                            </div>
                        </div>
                    </div>
                    
                </div>
                    
                
            </div>  <!--END: Content Wrap-->
            
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="../js/bootstrap-table.min.js"></script> 
  
