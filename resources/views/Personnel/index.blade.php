<!-- 
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="{{ asset('./js/bootstrap-table.min.css') }}" />     
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  
<div class="container">
                    <div class="card-header">Contacts</div>
                    <div class="card-body">
                        <a href="{{ url('/contact/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
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
                                    <th data-field="PERS_MAT_95" data-sortable="true" data-switchable="false">PERS_MAT_95</th>
                <th data-field="PERS_MAT_ACT" data-sortable="true" data-switchable="false">PERS_MAT_ACT</th>
                <th data-field="PERS_NOM" data-sortable="true">PERS_NOM</th>
                <th data-field="PERS_PRENOM" data-sortable="true">PERS_PRENOM</th>
                <th data-field="PERS_DATE_NAIS" data-sortable="true">PERS_DATE_NAIS</th>
                <th data-field="PERS_SEX_X" data-sortable="true">PERS_SEX_X</th>
                <th data-field="PERS_CODE_QUALIF" data-sortable="true">PERS_CODE_QUALIF</th>
                <th data-field="PERS_NATURAGENT_93" data-sortable="true">PERS_NATURAGENT_93</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($personnels as $personnel)
                                    <tr>
                                    <td >{{ $personnel->PERS_MAT_95 }}</td>
                <td >{{ $personnel->PERS_MAT_ACT }}</td>
                <td >{{ $personnel->PERS_NOM }}</td>
                <td >{{ $personnel->PERS_PRENOM }}</td>
                <td >{{ $personnel->PERS_DATE_NAIS }}</td>
                <td >{{ $personnel->PERS_SEX_X }}</td>
                <td > {{ $personnel->PERS_CODE_QUALIF }}</td>
                <td >{{ $personnel->PERS_NATURAGENT_93 }}</td>
                                        <td>
                                            <a href="{{ url('/contact/' . $personnel->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/contact/' . $personnel->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/contact' . '/' . $personnel->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
  
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="./js/bootstrap-table.min.js"></script>
</body>
</html> -->

 
@extends('Personnel.layout')
@section('content')
<div class="container mt-2 mb-2">
        <a href="{{ url('/personnels/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>
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
                <th colspan="9" data-align="center">Personnel List</th>
            </tr>
            
            <tr>
                <th data-field="PERS_MAT_95" data-sortable="true" data-switchable="false">PERS_MAT_95</th>
                <th data-field="PERS_MAT_ACT" data-sortable="true" data-switchable="false">PERS_MAT_ACT</th>
                <th data-field="PERS_NOM" data-sortable="true">PERS_NOM</th>
                <th data-field="PERS_PRENOM" data-sortable="true">PERS_PRENOM</th>
                <th data-field="PERS_DATE_NAIS" data-sortable="true">PERS_DATE_NAIS</th>
                <th data-field="PERS_SEX_X" data-sortable="true">PERS_SEX_X</th>
                <th data-field="PERS_CODE_QUALIF" data-sortable="true">PERS_CODE_QUALIF</th>
                <th data-field="PERS_NATURAGENT_93" data-sortable="true">PERS_NATURAGENT_93</th>
                <th  data-sortable="true">action</th>
            </tr>
        </thead>
            <tbody>
            @foreach ($personnels as $personnel)
                <tr>
                <td></td>
                <td >{{ $personnel->PERS_MAT_95 }}</td>
                <td >{{ $personnel->PERS_MAT_ACT }}</td>
                <td >{{ $personnel->PERS_NOM }}</td>
                <td >{{ $personnel->PERS_PRENOM }}</td>
                <td >{{ $personnel->PERS_DATE_NAIS }}</td>
                <td >{{ $personnel->PERS_SEX_X }}</td>
                <td > {{ $personnel->PERS_CODE_QUALIF }}</td>
                <td >{{ $personnel->PERS_NATURAGENT_93 }}</td>
                <td>
                    <a href="{{ url('/personnels/' . $personnel->PERS_MAT_95) }}" title="View "><button class="btn btn-info btn-sm"> View</button></a> 
                    <a href="{{ url('/personnels/' . $personnel->PERS_MAT_95 . '/edit') }}" title="Edit "><button class="btn btn-primary btn-sm"> Edit</button></a>
                    <form method="POST" action="{{ url('/personnels' . '/' . $personnel->PERS_MAT_95) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)">Delete</button>
                    </form> 
                </td> 
                
                </tr>
                @endforeach
                        
            </tbody>
        </table>
    </div>
    @endsection



 