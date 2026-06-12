<?php

use App\Http\Controllers\ControllerPeople;
use App\Http\Controllers\ControllerPeopleTasks;
use App\Http\Controllers\ControllerTasks;
use Illuminate\Support\Facades\Route;

Route::apiResource('/people', ControllerPeople::class)
    ->except(['edit', 'create']);

Route::apiResource('/task', ControllerTasks::class)
    ->except(['edit', 'create']);

Route::post('/people/{person}/task', [ControllerPeopleTasks::class, 'syncPeopleTask']);
Route::delete('/people/{person}/task', [ControllerPeopleTasks::class, 'delete']);
Route::get('/people/{person}/task', [ControllerPeopleTasks::class, 'peopleTasks'])
    ->whereNumber('person');

Route::get('/task/{task}/people', [ControllerPeopleTasks::class, 'tasksPeople'])
    ->whereNumber('task');
