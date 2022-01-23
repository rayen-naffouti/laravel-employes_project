@extends('Personnel.layout')
@section('content')

<div class="container mt-2 mb-2">
       
        <table 
        data-toggle="table"
        data-pagination="true"
        data-search="true"
        data-search-align="left"
        data-show-columns="true"
        data-show-toggle="true"
        data-show-refresh="true"
        data-show-fullscreen="true"
        data-show-pagination-switch="true"
        data-pagination-pre-text="previous"
        data-pagination-next-text="next"
        data-pagination-h-align="right"
        data-page-list="[10,20,30,0,50,All]"
        >
        
        <thead>
            <tr>
                <th rowspan="2" data-checkbox="true" data-valign="middle"></th>
                <th colspan="10" data-align="center">Personnel List</th>
            </tr>
            
            <tr>
                <th data-field="ABS_MAT_95" data-sortable="true" data-switchable="false">ABS_MAT_95</th>
                <th data-field="ABS_NUMORD_93" data-sortable="true" data-switchable="false">ABS_NUMORD_93</th>
                <th data-field="ABS_NAT_9" data-sortable="true">ABS_NAT_9</th>
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
                <td >{{ $personnel->ABS_MAT_95  }}</td>
                <td >{{ $personnel->ABS_NUMORD_93  }}</td>
                <td >{{ $personnel->ABS_NAT_9  }}</td>
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

    @endsection
