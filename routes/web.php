<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DisplayController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::middleware(['auth'])->group(function () {
    Route::get('/index', [LoginController::class, 'admin'])->name('index');
});
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/pemohonView', [InputController::class, 'pemohonView'])->name('newPemohon.view');
Route::post('/pemohonNew', [InputController::class, 'pemohonNew'])->name('newPemohon.new');
Route::get('/pasanganView', [InputController::class, 'pasanganView'])->name('newPasangan.view');
Route::post('/pasangan', [InputController::class, 'pasanganNew'])->name('newPasangan.new');
Route::get('/pendapatanView', [InputController::class, 'pendapatanView'])->name('pendapatan.view');
Route::post('/pendapatanNew', [InputController::class, 'pendapatanNew'])->name('pendapatan.new');
Route::get('/perbelanjaanView', [InputController::class, 'perbelanjaanView'])->name('perbelanjaan.view');
Route::post('/perbelanjaanNew', [InputController::class, 'perbelanjaanNew'])->name('perbelanjaan.new');
Route::get('/warisView', [InputController::class, 'warisView'])->name('newWaris.view');
Route::post('/warisNew', [InputController::class, 'warisNew'])->name('newWaris.new');
Route::get('/pemohonDisplay', [DisplayController::class, 'pemohonDisplay'])->name('pemohon.display');
Route::get('/pemohonDetails/{id}', [DisplayController::class, 'pemohonDetails'])->name('pemohon.details');
Route::get('/kewanganDetails/{id}', [DisplayController::class, 'kewanganDetails'])->name('kewangan.details');
Route::get('/warisDetails/{id}', [DisplayController::class, 'warisDetails'])->name('waris.details');
Route::delete('/pemohonDelete/{id}', [EditController::class, 'pemohonDelete'])->name('pemohon.delete');
Route::get('/pemohonEView{id}', [EditController::class, 'pemohonEView'])->name('pemohon.Eview');
Route::post('/pemohonEdit{id}', [EditController::class, 'pemohonEdit'])->name('pemohon.edit');
Route::get('/pasanganEview{id}', [EditController::class, 'pasanganEview'])->name('pasangan.Eview');
Route::post('/pasanganEdit{id}', [EditController::class, 'pasanganEdit'])->name('pasangan.edit');
Route::get('/pendapatanEview{id}', [EditController::class, 'pendapatanEview'])->name('pendapatan.Eview');
Route::post('/pendapatanEdit{id}', [EditController::class, 'pendapatanEdit'])->name('pendapatan.edit');
Route::get('/perbelanjaanEview{id}', [EditController::class, 'perbelanjaanEview'])->name('perbelanjaan.Eview');
Route::post('/perbelanjaanEdit{id}', [EditController::class, 'perbelanjaanEdit'])->name('perbelanjaan.edit');
Route::get('/warisEview{id}', [EditController::class, 'warisEview'])->name('waris.Eview');
Route::put('/warisEdit{id}', [EditController::class, 'warisEdit'])->name('waris.edit');