<?php

//require 'vendor/autoload.php';







use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', 'TaskController@index');