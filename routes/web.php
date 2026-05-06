<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/aspirasi', function () {
    return view('aspirasi');
});

Route::post('/aspirasi', function (Request $request) {

    $request->validate([
        'nama' => 'required',
        'nim' => 'required',
        'kategori' => 'required',
        'aspirasi' => 'required'
    ]);

    return back()->with('success', 'Aspirasi berhasil dikirim');
});

Route::get('/informatika', function () {
    return view('informatikaviews', [
        'nama' => 'informatika A'
    ]);
});

Route::redirect('/testredirect', '/informatika');

Route::get('/HelloInformatika', [
    App\Http\Controllers\HelloInformatikaController::class,
    'HelloInformatika'
]);

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});