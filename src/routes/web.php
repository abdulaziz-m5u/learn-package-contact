<?php 

use Illuminate\Http\Request;

Route::get('contact', [Ypcode\Contact\Http\Controllers\ContactController::class, 'index'])->name('contact');

Route::post('contact', [Ypcode\Contact\Http\Controllers\ContactController::class, 'store'])->name('contact.store');