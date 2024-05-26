<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use Illuminate\Support\Facades\Route;

//Route untuk menampilkan seluruh data mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
//Route untuk menampilkan form tambah data mahasiswa
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
//Route untuk memproses data dari form dan simpan di database
Route::post('/mahasiswa/store', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
//Route untuk menampilkan seluruh 1data mahasiswa
Route::get('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'show'])->name('mahasiswa.show');
//route untuk menampilkan form edit data mahasiswa
Route::get('/mahasiswa/{mahasiswa}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
//route untuk memproses data yang sudah di update di form dan disimpan di database
Route::put('mahasiswa/{mahasiswa}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
//Route untuk proses hapus
Route::get('/mahasiswa/delete/{mahasiswa}', [MahasiswaController::class, 'delete'])->name('mahasiswa.delete');


Route::get('/dosen', [DosenController::class, 'index'])->name('dosen.index');
//Route untuk menampilkan form tambah data mahasiswa
Route::get('/dosen/create', [DosenController::class, 'create'])->name('dosen.create');
//Route untuk memproses data dari form dan simpan di database
Route::post('/dosen/store_dosen', [DosenController::class, 'store_dosen'])->name('dosen.store_dosen');
//Route untuk menampilkan seluruh 1data mahasiswa
Route::get('/dosen/{dosen}', [DosenController::class, 'show'])->name('dosen.show');
//route untuk menampilkan form edit data mahasiswa
Route::get('/dosen/{dosen}/edit', [DosenController::class, 'edit'])->name('dosen.edit');
//route untuk memproses data yang sudah di update di form dan disimpan di database
Route::put('dosen/{dosen}', [DosenController::class, 'update'])->name('dosen.update');
//Route untuk proses hapus
Route::get('/dosen/delete/{dosen}', [DosenController::class, 'delete'])->name('dosen.delete');
