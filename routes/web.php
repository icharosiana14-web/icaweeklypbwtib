
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile",
        "name" => "icha rosiana",
        "nim" => "13242520050",
        "prodi" => "teknologi informasi",
        "gambar" => ""
    ]);
});

$data_berita = [
    [
        "judul" => "mahasiswa ti",
        "slug" => "mahasiswa-ti",
        "penulis" => "admin",
        "konten" => "Berita seputar mahasiswa teknologi informasi."
    ],
    [
        "judul" => "dosen ti",
        "slug" => "dosen-ti",
        "penulis" => "admin",
        "konten" => "Berita seputar dosen teknologi informasi."
    ]
];

Route::get('/berita/{slug}', function ($slug) use ($data_berita) {
    $berita = collect($data_berita)->firstWhere('slug', $slug);

    if (!$berita) {
        abort(404);
    }

    return view('berita', [
        "berita" => $berita
    ]);
});
