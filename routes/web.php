<?php
use lib\Route;
use app\controllers\HomeController;
use app\controllers\DiasController;
use app\controllers\VisitasController;

$base = getenv('APP_URL_BASE');
Route::init($base === false ? '/' : $base);

Route::get('/',               [HomeController::class, 'inicio']);
Route::get('/inicio',         [HomeController::class, 'inicio']);
Route::get('/mi-info',        [HomeController::class, 'miInfo']);

Route::get('/dia/1',          [DiasController::class, 'dia1']);
Route::get('/dia/2',          [DiasController::class, 'dia2']);
Route::get('/dia/3',          [DiasController::class, 'dia3']);
Route::get('/dia/4',          [DiasController::class, 'dia4']);
Route::get('/dia/5',          [DiasController::class, 'dia5']);

Route::get('/visitas',        [VisitasController::class, 'index']);
Route::post('/visitas/registrar', [VisitasController::class, 'registrar']);

Route::dispatch();