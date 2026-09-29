<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/', function () {
    return view('profile', [
        "title" => "profile",
        "name" => "icha rosiana",
        "nim" => "13242520050",
        "prodi" => "teknologi informasi",
        "gambar" => ""
    ]);
});