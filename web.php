<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\doneController;
use App\Http\Controllers\CreateWorkspaceController;
use App\Http\Controllers\AddMytaskController;


Route::get('/', function () {
    return view('templateworkspace');
});

Route::controller(doneController::class)->group(function () {
    Route::get('/workspace', 'openWorkspace');
});

Route::controller(CreateWorkspaceController::class)->group(function () {
    Route::get('/workspace/dashboard', 'showDashboardWorkspace');
    Route::get('/workspace/form', 'showFormWorkspace');
    Route::post('workspace/addDataFormWorkspace','addDataFormWorkspace');
});

Route::controller(AddMytaskController::class)->group(function () {
    Route::get('task/form', 'openAddMyTask');
    Route::post('workspace/updateMyTask','updateMyTask');
});
