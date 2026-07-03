<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'beranda'])->name('beranda');
Route::get('/tentang', [PageController::class, 'tentang'])->name('tentang');
Route::get('/tim', [PageController::class, 'tim'])->name('tim');
Route::get('/tim/kordes', [PageController::class, 'kordes'])->name('kordes');
Route::get('/tim/sekben', [PageController::class, 'sekben'])->name('sekben');Route::get('/tim/sakukan', [PageController::class, 'sakukan'])->name('sakukan');Route::get('/tim/acara', [PageController::class, 'acara'])->name('acara');
Route::get('/tim/humas', [PageController::class, 'humas'])->name('humas');
Route::get('/tim/perkap-konsum', [PageController::class, 'perkapKonsum'])->name('perkap-konsum');
Route::get('/tim/pdd', [PageController::class, 'pdd'])->name('pdd');
Route::get('/informasi', [PageController::class, 'informasi'])->name('informasi');
Route::get('/peta', [PageController::class, 'peta'])->name('peta');
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');
Route::get('/admin', [PageController::class, 'admin'])->name('admin');
Route::get('/admin/kelola-informasi', [PageController::class, 'kelolaInformasi'])->name('kelola-informasi');
Route::post('/admin/kelola-informasi', [PageController::class, 'kelolaInformasi']);
Route::get('/admin/informasi/{id}/edit', [PageController::class, 'editInformasi'])->name('edit-informasi');
Route::post('/admin/informasi/{id}/update', [PageController::class, 'updateInformasi'])->name('update-informasi');
Route::get('/admin/informasi/{id}/delete', [PageController::class, 'deleteInformasi'])->name('delete-informasi');
