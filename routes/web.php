<?php
use App\Http\Controllers\Guest\PageController as PageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'index']);

