<?php

use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SectionController;
use Illuminate\Support\Facades\Route;


Route::resource('invoices', InvoiceController::class)->middleware('auth');
Route::resource('sections', SectionController::class)->middleware('auth');
Route::get('/{page}', [AdminController::class, '__invoke'])->middleware('auth');
