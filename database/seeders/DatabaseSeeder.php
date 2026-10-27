<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

       DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => 'icharosiana14@gmail.com',
            'password' => Hash::make('rosiana14'),
        ]);

        DB::table('beritas')->insert([
            'judul' => 'ikan sapu-sapu dan guppy',
            'slug' => 'ikan sapu-sapu dan guppy',
            'penulis' => 'jean grey',
            'konten' => 'A seeder class only contains one method by default: run.
            This method is called when the db:seed Artisan command is executed. Within the run method,
            you may insert data into your database however you wish.',
        ]);
    }
}
