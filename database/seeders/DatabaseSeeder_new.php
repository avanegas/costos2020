<?php

namespace Database\Seeders;

use App\Models\Transporte;
use App\Models\Obrero;
use App\Models\GrupoObrero;
use App\Models\Material;
use App\Models\GrupoMaterial;
use App\Models\Equipo;
use App\Models\GrupoEquipo;
use App\Models\Zona;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Page;
use App\Models\Group;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Comment;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    public function run()
    {

        
        // Precio
        $this->call(PreciosSeeder::class);

    }
}

