<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SubmitController;
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
Route::get('/hartaView/{pemohonId}', [InputController::class, 'hartaView'])->name('newHarta.view');
Route::post('/hartaNew', [InputController::class, 'hartaNew'])->name('newHarta.new');
Route::get('/hadTanggunganView', [InputController::class, 'hadTanggunganView'])->name('hadTanggungan.view');
Route::post('/hadTanggunganNew', [InputController::class, 'hadTanggunganNew'])->name('hadTanggungan.new');
Route::get('/hadPenambahanView', [InputController::class, 'hadPenambahanView'])->name('hadPenambahan.view');
Route::post('/hadPenambahanNew', [InputController::class, 'hadPenambahanNew'])->name('hadPenambahan.new');
Route::get('/hadPenolakanView', [InputController::class, 'hadPenolakanView'])->name('hadPenolakan.view');
Route::post('/hadPenolakanNew', [InputController::class, 'hadPenolakanNew'])->name('hadPenolakan.new');
Route::get('/sejarahBantuanView/{pemohonId}', [InputController::class, 'sejarahBantuanView'])->name('sejarahBantuan.view');
Route::post('/sejarahBantuanNew', [InputController::class, 'sejarahBantuanNew'])->name('sejarahBantuan.new');
Route::get('/pemohonDisplay', [DisplayController::class, 'pemohonDisplay'])->name('pemohon.display');
Route::get('/pemohonDetails/{id}', [DisplayController::class, 'pemohonDetails'])->name('pemohon.details');
Route::get('/kewanganDetails/{id}', [DisplayController::class, 'kewanganDetails'])->name('kewangan.details');
Route::get('/warisDetails/{id}', [DisplayController::class, 'warisDetails'])->name('waris.details');
Route::get('/hartaDetails/{id}', [DisplayController::class, 'hartaDetails'])->name('harta.details');
Route::get('/kifayahDetails/{id}', [DisplayController::class, 'kifayahDetails'])->name('kifayah.details');
Route::get('/sejarahDetails/{id}', [DisplayController::class, 'sejarahDetails'])->name('sejarah.details');
Route::get('/allDetails/{id}', [DisplayController::class, 'allDetails'])->name('all.details');
Route::delete('/pemohonDelete/{id}', [EditController::class, 'pemohonDelete'])->name('pemohon.delete');


Route::get('/pemohonEView/{id}', [EditController::class, 'pemohonEView'])->name('pemohon.Eview');
Route::post('/pemohonEdit/{id}', [EditController::class, 'pemohonEdit'])->name('pemohon.edit');
Route::get('/pasanganEview/{id}', [EditController::class, 'pasanganEview'])->name('pasangan.Eview');
Route::post('/pasanganEdit/{id}', [EditController::class, 'pasanganEdit'])->name('pasangan.edit');
Route::get('/pendapatanEview/{id}', [EditController::class, 'pendapatanEview'])->name('pendapatan.Eview');
Route::post('/pendapatanEdit/{id}', [EditController::class, 'pendapatanEdit'])->name('pendapatan.edit');
Route::get('/perbelanjaanEview/{id}', [EditController::class, 'perbelanjaanEview'])->name('perbelanjaan.Eview');
Route::post('/perbelanjaanEdit/{id}', [EditController::class, 'perbelanjaanEdit'])->name('perbelanjaan.edit');
Route::get('/warisEview/{id}', [EditController::class, 'warisEview'])->name('waris.Eview');
Route::put('/warisEdit/{id}', [EditController::class, 'warisEdit'])->name('waris.edit');
Route::get('/hartaEview/{id}', [EditController::class, 'hartaEview'])->name('harta.Eview');
Route::post('/hartaEdit/{id}', [EditController::class, 'hartaEdit'])->name('harta.edit');
Route::get('/hadTanggunganEview/{id}', [EditController::class, 'hadTanggunganEview'])->name('hadTanggungan.Eview');
Route::post('/hadTanggunganEdit/{id}', [EditController::class, 'hadTanggunganEdit'])->name('hadTanggungan.edit');
Route::get('/hadPenambahanEview/{id}', [EditController::class, 'hadPenambahanEview'])->name('hadPenambahan.Eview');
Route::post('/hadPenambahanEdit/{id}', [EditController::class, 'hadPenambahanEdit'])->name('hadPenambahan.edit');
Route::get('/hadPenolakanEview/{id}', [EditController::class, 'hadPenolakanEview'])->name('hadPenolakan.Eview');
Route::post('/hadPenolakanEdit/{id}', [EditController::class, 'hadPenolakanEdit'])->name('hadPenolakan.edit');
Route::get('/sejarahEview/{id}', [EditController::class, 'sejarahEview'])->name('sejarah.Eview');
Route::post('/sejarahEdit/{id}', [EditController::class, 'sejarahEdit'])->name('sejarah.edit');



Route::get('/pemohonBaru', [SubmitController::class, 'pemohonView'])->name('pemohon.baru');
Route::post('/pemohonSubmit', [SubmitController::class, 'pemohonSubmit'])->name('pemohon.submit');

