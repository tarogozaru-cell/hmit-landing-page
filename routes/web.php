<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Models\Aspirasi;
use App\Models\Pendaftaran;

use App\Http\Controllers\HelloInformatikaController;


// LANDING PAGE

Route::get('/', function () {
    return view('landingpage');
});


// ASPIRASI

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

    Aspirasi::create([
        'nama' => $request->nama,
        'nim' => $request->nim,
        'kategori' => $request->kategori,
        'aspirasi' => $request->aspirasi,
        'status' => 'pending'
    ]);

    return back()->with('success', 'Aspirasi berhasil dikirim');
});


// PENDAFTARAN

Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});

Route::post('/pendaftaran', function (Request $request) {

    $request->validate([
        'nama' => 'required',
        'nim' => 'required',
        'email' => 'required|email',
        'alasan' => 'required'
    ]);

    Pendaftaran::create([
        'nama' => $request->nama,
        'nim' => $request->nim,
        'email' => $request->email,
        'alasan' => $request->alasan
    ]);

    return back()->with('success', 'Pendaftaran berhasil dikirim');
});


// ADMIN

Route::get('/admin/pendaftaran', function () {

    $data = Pendaftaran::latest()->get();

    return view('admin.pendaftaran', compact('data'));

});


// DASHBOARD

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


// LATIHAN

Route::get('/informatika', function () {

    return view('informatikaviews', [
        'nama' => 'informatika A'
    ]);

});

Route::redirect('/testredirect', '/informatika');

Route::get('/HelloInformatika', [
    HelloInformatikaController::class,
    'HelloInformatika'
]);


// 404 ERROR

Route::fallback(function () {

    return response()->view('errors.404', [], 404);

});


// AUTH BREEZE

require __DIR__.'/auth.php';