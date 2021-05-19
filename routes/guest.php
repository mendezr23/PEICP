<?php

use Illuminate\Support\Facades\Route;

use App\http\controllers\Guest\PeriodController;

Route::resource('periods', PeriodController::class)->names('guest.periods');