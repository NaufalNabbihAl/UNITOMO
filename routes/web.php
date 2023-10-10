<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});
Route::get('/Login', [UserController::class, 'login'])->name('login');
Route::get('/Dashboard', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('/PengajuanTugasAkhir', [UserController::class, 'pengajuanTugasAkhir'])->name('pengajuanTugasAkhir');
Route::get('/PengajuanTugasAkhir/AjukanTugasAkhir', [UserController::class, 'ajukanTugasAkhir'])->name('ajukanTugasAkhir');
Route::get('/PengajuanTugasAkhir/proposalTugasAkhir', [UserController::class, 'proposalTugasAkhir'])->name('proposalTugasAkhir');
Route::get('/PengajuanTugasAkhir/hasilTugasAkhir', [UserController::class, 'hasilTugasAkhir'])->name('hasilTugasAkhir');
Route::get('/PengajuanKerjaPraktik', [UserController::class, 'pengajuanKerjaPraktik'])->name('pengajuanKerjaPraktik');
Route::get('/PendataanKerjaPraktik', [UserController::class, 'pendataanKerjaPraktik'])->name('pendataanKerjaPraktik');
Route::get('/Notification', [UserController::class, 'notification'])->name('notification');
Route::get('/HelpCenter', [UserController::class, 'helpCenter'])->name('helpCenter');


Route::get('/kelolaPengajuanTA', [AdminController::class, 'index'])->name('kelolaPengajuanTA');
Route::get('/kelolaPengajuanTA/detailPengajuan', [AdminController::class, 'detailPengajuan'])->name('detailPengajuan');
Route::get('/kelolaTaMahasiswa', [AdminController::class, 'kelolaTaMahasiswa'])->name('kelolaTaMahasiswa');
Route::get('/kelolaTaMahasiswa/listTa1Mahasiswa', [AdminController::class, 'listTa1Mahasiswa'])->name('listTa1Mahasiswa');
Route::get('/kelolaTaMahasiswa/listTa1Mahasiswa/DetailTugasAkhir', [AdminController::class, 'detailTugasAkhir'])->name('detailTugasAkhir');
Route::get('/kelolaTaMahasiswa/listTa2Mahasiswa', [AdminController::class, 'listTa2Mahasiswa'])->name('listTa2Mahasiswa');
Route::get('/kelolaPengajuanKP', [AdminController::class, 'kelolaPengajuanKP'])->name('kelolaPengajuanKP');
Route::get('/listDataKpMahasiswa', [AdminController::class, 'listDataKpMahasiswa'])->name('listDataKpMahasiswa');

Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
