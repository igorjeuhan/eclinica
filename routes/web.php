<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdmController;
use App\Http\Controllers\admin\PrincipalController;
use App\Http\Requests\CustomerRequest;

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

Route::get('/', [PrincipalController::class, 'principal'])->name('site.principal');
Route::get('adm', [AdmController::class, 'adm'])->name('site.adm');
Route::post('adm/salvar', [AdmController::class, 'formAdd'])->name('site.salvar');
Route::delete('adm/{id}', [AdmController::class, 'deletar'])->name('site.deletar');
