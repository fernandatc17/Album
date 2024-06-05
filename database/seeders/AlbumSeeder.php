<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Album;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Album::create([
            'album_nombre' => 'Album1',
            'album_descripcion' => 'Descripción del album1',
            'usuario_id' => 1
        ]);
        Album::create([
            'album_nombre' => 'Album2',
            'album_descripcion' => 'Descripción del album2',
            'usuario_id' => 2
        ]);
    }
}
