<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\IndicatorController;
use App\Http\Controllers\Admin\OrganismController;
use App\Http\Controllers\Admin\QuadrantController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\AnnotationController;
use App\Http\Controllers\Admin\PeriodController;
use App\http\Controllers\Admin\ReportController;



Route::get('', [HomeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');
Route::resource('users', UserController::class)->only(['index','edit','update'])->names('admin.users');
Route::resource('annotations', AnnotationController::class)->only(['index','show'])->names('admin.annotations');
Route::resource('roles', RoleController::class)->names('admin.roles');
Route::resource('indicators', IndicatorController::class)->except('show')->names('admin.indicators');
Route::resource('quadrants', QuadrantController::class)->names('admin.quadrants');
Route::resource('organisms', OrganismController::class)->except('show')->names('admin.organisms');
Route::resource('types', TypeController::class)->except('show')->names('admin.types');
Route::resource('periods', PeriodController::class)->only(['index','show','edit','update'])->names('admin.periods');

Route::get('reports', [ReportController::class, 'report_results'])->name('admin.reports.index');








