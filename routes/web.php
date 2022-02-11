<?php
use App\Http\Controllers\PersonnelController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     $personnels=DB::table('personnels')
//             ->get();
//     $homme=0;
//     $femme=0;
//     for($i = 0;$i<count($personnels);$i++)
//         {
        
//             if ($personnels[$i]->PERS_SEX_X == 'H') {
//                 $homme += 1;
//             } 
//         }
//     $sum = count($personnels);
//     $homme = ($homme * 100) /  $sum ;
//     $femme = 100 -  $homme ;


//     $ldate = date('Y-m-d');
//     $yesterday = date('Y-m-d',strtotime("-1 days"));

//     $absence=DB::table('absences')
//             ->where('ABS_DATE_DEB', '=', $ldate )
//             ->get();
//     $absence2=DB::table('absences')
//             ->where('ABS_DATE_DEB', '=', $yesterday )
//             ->get();
//     $absence=count($absence);
//     $absence2=count($absence2);

//     $perabsence = $absence * 100 / $sum;
//     $perabsence2 = $absence2 * 100 / $sum;
//     return view('welcome')
//     ->with('homme', $homme)
//     ->with('femme', $femme)
//     ->with('sum', $sum)
//     ->with('absence', $absence)
//     ->with('absence2', $absence2)
//     ->with('perabsence', $perabsence)
//     ->with('perabsence2', $perabsence2);
// })->middleware('auth');

Route::resource('/', 'StatsController');
Route::get('/table', function () {
    return view('table');
})->middleware('auth');

Route::get('/profil', function () {
    return view('profil');
})->middleware('auth');

Route::resource('user', 'UserController');

Route::resource('personnels', 'PersonnelController');
Route::resource('absence', 'AbsenceController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
