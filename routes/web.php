<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes(['register' => false]);
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('/');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/configuracion', [App\Http\Controllers\UserController::class, 'configuracion'])->name('configuracion');
Route::put('update_alumno', [App\Http\Controllers\UserController::class, 'updateAlumno'])->name('update_alumno');
Route::put('update_password_alumno/{id}', [App\Http\Controllers\AlumnoController::class, 'updatePassword'])->name('update_password_alumno');
Route::get('/catalogo_asesores', [App\Http\Controllers\AsesorController::class, 'index'])->name('catalogo_asesores');
Route::get('generar_reporte/{alumno_id}/{reporte_id}/{codigo}', [App\Http\Controllers\ReporteController::class, 'generarReporte'])->name('generar_reporte');
Route::get('ver_alumno/{id}', [App\Http\Controllers\AlumnoController::class, 'show'])->name('ver_alumno');
Route::put('update_asesor/{id}', [App\Http\Controllers\AsesorController::class, 'update'])->name('update_asesor');
Route::put('update_password_asesor/{id}', [App\Http\Controllers\AsesorController::class, 'updatePassword'])->name('update_password_asesor');
Route::get('documentacion', [App\Http\Controllers\DocumetacionController::class, 'index'])->name('documentacion');
Route::put('update_seccion', [App\Http\Controllers\SeccionController::class, 'update'])->name('update_seccion');
Route::put('update_reporte', [App\Http\Controllers\ReporteController::class, 'update'])->name('update_reporte');
Route::put('update_admin/{id}', [App\Http\Controllers\AsesorController::class, 'update'])->name('update_admin');
Route::put('update_password_admin/{id}', [App\Http\Controllers\AdminController::class, 'updatePassword'])->name('update_password_admin');
