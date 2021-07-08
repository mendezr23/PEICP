<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PeriodController;

Route::resource('periods', PeriodController::class)->names('guest.periods');
