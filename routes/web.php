<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalcController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/calc', [CalcController::class,'calc']);


Route::get('/csv', function() {
  $table = CalcController::csv();
  $output='';
  foreach ($table as $row) {
      $output.=  implode(",",$row);
  }
  $headers = array(
      'Content-Type' => 'text/csv',
      'Content-Disposition' => 'attachment; filename="ExportFileName.csv"',	  
  );
  return Response::make(rtrim($output, "\n"), 200, $headers);
});