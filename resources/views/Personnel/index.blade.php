@extends('layout')
 @php
    $i = 0;
@endphp


    
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
                            <a href="{{ url('/personnels/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
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
                <th colspan="8" data-align="center">Personnels List</th>
                </tr>
            
                <tr>
                <th data-field="PERS_MAT_95" data-sortable="true" data-switchable="false">Matricule</th>
                <th data-field="PERS_NOM" data-sortable="true">First Name</th>
                <th data-field="PERS_PRENOM" data-sortable="true">Last Name</th>
                <th data-field="PERS_DATE_NAIS" data-sortable="true">Date of Birth</th>
                <th data-field="PERS_SEX_X" data-sortable="true">Sex</th>
                <th data-field="PERS_CODE_QUALIF" data-sortable="true">Qualification</th>
                <th data-field="PERS_NATURAGENT_93" data-sortable="true">Agent Nature</th>
                <th  data-sortable="true">action </th>
                </tr>
                </thead>
                <tbody>
                @foreach ($personnels as $personnel )
                <tr>
                <td >{{ $personnel->PERS_MAT_95 }}</td>
                <td >{{ $personnel->PERS_NOM }}</td>
                <td >{{ $personnel->PERS_PRENOM }}</td>
                <td >{{ $personnel->PERS_DATE_NAIS }}</td>
                @if ($personnel->PERS_SEX_X == 'H')
                <td >Homme</td>
                @else
                <td >Femme</td>
                @endif
               
                <td > {{ $personnel->QUALIF_LIBELLE }}</td>
                <td >{{ $personnel->NATAGENT_LIB_X50 }}</td>
                <td>
                    <a href="{{ url('/personnels/' . $personnel->PERS_MAT_95) }}" title="View "><button class="btn btn-info btn-sm"> Absence ({{ $count[$i] }})</button></a> 
                    <a href="{{ url('/personnels/' . $personnel->PERS_MAT_95 . '/edit') }}" title="Edit "><button class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button></a>
                    <form method="POST" action="{{ url('/personnels' . '/' . $personnel->PERS_MAT_95) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash"></i></button>
                    </form> 
                </td> 
                
                </tr>
                @php
               $i = $i+1;
                @endphp
             
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
  
