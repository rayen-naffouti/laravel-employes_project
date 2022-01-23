<?php

namespace App\Http\Controllers;

use App\Absence;
use App\Personnel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonnelController extends Controller
{
  
    // public function index()
    // {
    //     $data = Personnel::all();
    //     return view('list_personnel',['personnels'=>$data]);
    // }

    
    public function index()
    {
        $personnels = Personnel::all();
      return view ('Personnel.index')->with('personnels', $personnels);
    }
 
    
    public function create()
    {
        return view('Personnel.create');
    }
 
  
    public function store(Request $request)
    {
        $input = $request->all();
        Personnel::create($input);
        return redirect('personnels')->with('flash_message', 'Contact Addedd!');  
    }
 
    
    public function show($PERS_MAT_95)
    {
        // $personnels = Absence::where('ABS_NUMORD_93',$PERS_MAT_95)->get();
        // dd($personnels);
        // return view('Personnel.show')->with('personnels', $personnels);
        $personnels=DB::table('personnels')
            ->join('absences','personnels.PERS_MAT_95','ABS_NUMORD_93')
            ->where('personnels.PERS_MAT_95',$PERS_MAT_95)
            ->get() ;
            //dd($personnels);
            return view('Personnel.show')->with('personnels', $personnels);
    }
 
    
    public function edit($PERS_MAT_95)
    {
        $personnel = Personnel::find($PERS_MAT_95);
        //$personnel = Personnel::where('PERS_MAT_95',$PERS_MAT_95)->first();
        return view('personnel.edit')->with('personnel', $personnel);
    }
 
  
    public function update(Request $request, $PERS_MAT_95)
    {
        $personnel = Personnel::find($PERS_MAT_95);
        $input = $request->all();
        $personnel->update($input);
        return redirect('personnels')->with('flash_message', 'personnel Updated!');  
    }
 
  
    public function destroy($PERS_MAT_95)
    {
        Personnel::destroy($PERS_MAT_95);
        return redirect('personnels')->with('flash_message', 'personnel deleted!');  
    }
}
