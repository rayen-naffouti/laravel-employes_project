@extends('layout')

<div class="main-container">    <!-- START: Main Container -->
            
            <div class="page-header">
                <h1>Data Tables <small>Bootstrap Data Table</small></h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">Tables</a></li>
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
       
        <table 
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
                <th rowspan="2" data-checkbox="true" data-valign="middle"></th>
                <th colspan="9" data-align="center">{{ $personnels[1]->PERS_NOM  }}{{ $personnels[1]->PERS_PRENOM }} absence list</th>
            </tr>
            
            <tr>
                <th data-field="ABS_NUMORD_93" data-sortable="true" data-switchable="false">PERS_NOM</th>
                <th data-field="ABS_NAT_9" data-sortable="true">LIBELLE_ABS</th>
                <th data-field="ABS_CAT_9" data-sortable="true">ABS_CAT_9</th>
                <th data-field="ABS_DATE_DEB" data-sortable="true">ABS_DATE_DEB</th>
                <th data-field="ABS_PERDEB_X" data-sortable="true">ABS_PERDEB_X</th>
                <th data-field="ABS_DATE_FIN" data-sortable="true">ABS_DATE_FIN</th>
                <th data-field="ABS_PERFIN_X" data-sortable="true">ABS_PERFIN_X</th>
                <th data-field="ABS_NBRJOUR_93" data-sortable="true">ABS_NBRJOUR_93</th>
                <th data-field="ABS_CUMULE_9" data-sortable="true">ABS_CUMULE_9</th>
               
            </tr>
        </thead>
            <tbody>
            @foreach ($personnels as $personnel)
                <tr>

                <td></td>
                <td >{{ $personnel->PERS_NOM  }} {{ $personnel->PERS_PRENOM }}</td>
                <td >{{ $personnel->LIBELLE_ABS   }}</td>
                <td >{{ $personnel->ABS_CAT_9 }}</td>
                <td >{{ $personnel->ABS_DATE_DEB }}</td>
                <td >{{ $personnel->ABS_PERDEB_X }}M</td>
                <td >{{ $personnel->ABS_DATE_FIN }}</td>
                <td >{{ $personnel->ABS_PERFIN_X }}M</td> 
                <td >{{ $personnel->ABS_NBRJOUR_93 }}</td> 
                <td >{{ $personnel->ABS_CUMULE_9 }}</td> 
                
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
