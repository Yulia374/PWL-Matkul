<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HaloController;

Route::get('/', function () {
    //return view('welcome');
    return redirect('/beranda');
});

Route::get('/beranda', function () {
    return view('pages.beranda');
});

Route::get('/profil', function () {
    return view('pages.profil');
});

Route::get('/kontak-kami', function () {
    return view('pages.kontak-kami');
});

Route::get('/produk-kami', function () {
    return view('pages.produk-kami');
});










// Route::get('/profile', function () {
//     return view('profile');
// })->name('profile');

// Route::get('/data', function () {
//     return view('data');
// })->name('data');

// // // Route (jalur mau ke suatu halaman)
// // Route::get('/halo', function () {
// //     $namaLengkap = "Yuliaa Farah";
// //     return view('halo', ['nama'=>$namaLengkap]); //difile resources-> views
// // });

// Route::get('/halo',[HaloController::class, 'index']);

// // Route::get('/kontak', function () {
// //     return view('kontak');

// Route::get('/sintaks', function () {
//     $nama = 'yulia';
//     $alamat = '<b>Cianjur</b>';

//     //array
//     // return view('sintaks', ['nama'=>$nama, 'alamat'=>$alamat]);

//     //compact (digunakan ketika hanya beberapa variable yg dikirim)
//     // return view('sintaks', compact('nama', 'alamat'));

//     $idUser = '001';
//     $nilai = 75;
//     $data = compact('nama', 'alamat', 'nilai', 'buah');
//     $buah = array('apel', 'anggur', 'jeruk');
    
//     return view('sintaks', $data)->with('id', $idUser);

//     //with 
//     // return view('sintaks', compact('nama', 'alamat'))->with('id', $idUSer);
// });

// Route::get('/form', function () {
//     return view('form');
// });

// Route::post('/simpan.mahasiswa', function () {
//     $npm = request('npm');
//     $nama = request('nama');

//     return 'NPM : ' .$npm. 'Nama : ' .$nama;
// })->name('mahasiswa.simpan');