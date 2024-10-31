<?php
use app\http\Controller\admin\MainController;
use Illuminate\Support\Facades\Route;


Route::get('enter/admin', [MainController::class, 'index'] );