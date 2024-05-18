<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormRequestController;

Route::prefix('form-requests')->group(function () {
    Route::post('/', [FormRequestController::class, 'createFormRequest'])->name('form-requests.create');
    Route::get('/{id}', [FormRequestController::class, 'getFormRequestDetails'])->name('form-requests.details');
    Route::get('/', [FormRequestController::class, 'getAllFormRequests'])->name('form-requests.index');
    Route::put('/{id}', [FormRequestController::class, 'updateFormRequest'])->name('form-requests.update');
    Route::patch('/{id}/cancel', [FormRequestController::class, 'cancelFormRequest'])->name('form-requests.cancel');
    Route::delete('/{id}', [FormRequestController::class, 'deleteFormRequest'])->name('form-requests.delete');
});
