<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Foto;

class FotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Foto::create([
            'foto_nombre' => 'Foto1',
            'foto_descripcion' => 'Descripción de la foto 1',
            'foto_ruta' => 'img/foto1.jpg',
            'album_id' => 1
        ]);
        Foto::create([
            'foto_nombre' => 'Foto2',
            'foto_descripcion' => 'Descripción de la foto 2',
            'foto_ruta' => 'img/foto2.jpg',
            'album_id' => 1
        ]);

    }
}
