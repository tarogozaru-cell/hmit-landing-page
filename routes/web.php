<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/informatika', function () {
    return view('informatikaviews',
    ['nama'=> 'informatika A']);  
});

Route::redirect('testredirect','/informatika');

route::fallback(function(){
    return response()->view('errors.404', [], 404);
});