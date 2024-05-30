<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/lojas', function () {
    return view('lojas');
});
Route::get('/bombando', function () {
    return view('bombando');
});
Route::get('/promocao', function () {
    return view('promocao');
});
Route::get('/suporte', function () {
    return view('suporte');
});


//teste
Route::get('/teste', function () {
    return view('layout.header-footer');
});
