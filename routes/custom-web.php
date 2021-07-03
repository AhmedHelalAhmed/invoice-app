<?php

use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


Route::resource('invoices', InvoiceController::class);
Route::get('/{page}', [AdminController::class, '__invoke']);
