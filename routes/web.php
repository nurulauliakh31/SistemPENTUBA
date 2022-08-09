<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PTBController;

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

Route::get('/PENTUBA',[PTBController::class,'index']);
/*User*/
Route::get('/User',[PTBController::class,'DataUser']);
Route::post('/inputuser',[PTBController::class,'simpan']);
Route::get('/editUser/{id}',[PTBController::class,'frmEdit']);
Route::post('/editUser',[PTBController::class,'UpdateData']);
Route::get('/hapusUser/{d}',[PTBController::class,'hapus']);
/*PTB*/
Route::get('/PenyediaTB',[PTBController::class,'DataPTB']);
Route::post('/inputptb',[PTBController::class,'simpan_PTB']);
Route::get('/editPenyediaTB/{id}',[PTBController::class,'frmEdit_PTB']);
Route::post('/editPTB',[PTBController::class,'UpdateData_PTB']);
Route::get('/hapusPenyediaTB/{d}',[PTBController::class,'hapus_PTB']);
/*Tukang*/
Route::get('/Tukang',[PTBController::class,'DataTukang']);
Route::post('/inputtukang',[PTBController::class,'simpan_Tukang']);
Route::get('/editTukang/{id}',[PTBController::class,'frmEdit_Tukang']);
Route::post('/editTB',[PTBController::class,'UpdateData_Tukang']);
Route::get('/hapusTukang/{d}',[PTBController::class,'hapus_Tukang']);