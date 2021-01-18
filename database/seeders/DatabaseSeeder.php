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
        Storage::deleteDirectory('posts');
        Storage::makeDirectory('posts');

        //Group
        Group::create(['name' => 'ND']);
        Group::create(['name' => 'ARQUITECTO']);
        Group::create(['name' => 'INGENIERO']);
        Group::create(['name' => 'ESPECIALISTA']);
        Group::create(['name' => 'OBRERO']);
        Group::create(['name' => 'PROFESIONAL']);
        Group::create(['name' => 'PROVEEDOR']);

        //Page
        Page::create([
            'parent_id' => 1,
            'title'     => 'Quienes somos',
            'slug'      => 'quienes-somos',
            'content'   => 'Contenido de quienes somos'
        ]);

        Page::create([
            'parent_id' => 1,
            'title'     => 'Misión',
            'slug'      => 'mision',
            'content'   => 'Contenido de mision'
        ]);

        Page::create([
            'parent_id' => 1,
            'title'     => 'Visión',
            'slug'      => 'vision',
            'content'   => 'Contenido de vision'
        ]);

        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'Administer roles & permissions']);
        Permission::create(['name' => 'Create Post']);
        Permission::create(['name' => 'Edit Post']);
        Permission::create(['name' => 'Delete Post']);
        Permission::create(['name' => 'Publish Post']);
        Permission::create(['name' => 'Unpublish Post']);
        Permission::create(['name' => 'Comment Post']);

        // create roles and assign existing permissions
        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(['Administer roles & permissions', 'Create Post', 'Edit Post', 'Delete Post',  'Publish Post', 'Unpublish Post', 'Comment Post']);

        $role = Role::create(['name' => 'user']);
        $role->givePermissionTo('Comment Post');

        $role = Role::create(['name' => 'writer']);
        $role->givePermissionTo('Create Post');

        $this->call(UserSeeder::class);

        //Category::factory(12)->create();
        Category::create(['name'  => 'Arquitectura', 'slug' => 'arquitectura']);
        Category::create(['name'  => 'Biblioteca', 'slug' => 'biblioteca']);
        Category::create(['name'  => 'Diseño arquitectónico', 'slug' => 'diseno-arquitectonico']);
        Category::create(['name'  => 'Diseño eléctrico y electrónico', 'slug' => 'diseño-electrico-y-electronico']);
        Category::create(['name'  => 'Diseño estructural', 'slug' => 'diseno-estructural']);
        Category::create(['name'  => 'Diseño hidráulico y sanitario', 'slug' => 'diseno-hidraulico-y-sanitario']);
        Category::create(['name'  => 'Procesos constructivos', 'slug' => 'procesos-constructivos']);
        Category::create(['name'  => 'Ingenieria', 'slug' => 'ingenieria']);
        Category::create(['name'  => 'Materiales de construcción', 'slug' => 'materiales-de-construccion']);
        Category::create(['name'  => 'Materiales para acabados con Madera, Hierro y aluminio, etc.', 'slug' => 'materiales-para-acabados-de-madera-Hierro-y-aluminio']);
        Category::create(['name'  => 'Materiales para revestimientos de pisos y paredes', 'slug' => 'materiales-para-revestimientos-de-pisos-y-paredes']);
        Category::create(['name'  => 'Normas constructivas', 'slug' => 'normas-constructivas']);

        //Tag::factory(12)->create();
        Tag::create(['name'  => 'Arquitectura', 'slug' => 'arquitectura', 'color' => 'red']);
        Tag::create(['name'  => 'Ingeniería', 'slug' => 'ingenieria', 'color' => 'indigo']);
        Tag::create(['name'  => 'Costo', 'slug' => 'costo', 'color' => 'purple']);
        Tag::create(['name'  => 'Valor', 'slug' => 'valor', 'color' => 'yellow']);
        Tag::create(['name'  => 'Diseño', 'slug' => 'diseno', 'color' => 'teal']);
        Tag::create(['name'  => 'Madera', 'slug' => 'madera', 'color' => 'green']);
        Tag::create(['name'  => 'Acero de refuerzo', 'slug' => 'acer-de-refuerzo', 'color' => 'blue']);
        Tag::create(['name'  => 'Cemento', 'slug' => 'cemento', 'color' => 'gray']);
        Tag::create(['name'  => 'Hormigón', 'slug' => 'hormigon', 'color' => 'pink']);
        Tag::create(['name'  => 'Arena', 'slug' => 'arena', 'color' => 'red']);
        Tag::create(['name'  => 'Grava', 'slug' => 'grava', 'color' => 'indigo']);
        Tag::create(['name'  => 'Agua', 'slug' => 'agua', 'color' => 'purple']);
        Tag::create(['name'  => 'Mano de obra', 'slug' => 'mano-de-obra', 'color' => 'yellow']);
        Tag::create(['name'  => 'Reajuste de precios', 'slug' => 'reajuste-de-precios', 'color' => 'teal']);
        Tag::create(['name'  => 'Hidráulico', 'slug' => 'hidraulico', 'color' => 'green']);
        Tag::create(['name'  => 'Sanitario', 'slug' => 'sanitario', 'color' => 'blue']);
        Tag::create(['name'  => 'Mortero', 'slug' => 'mortero', 'color' => 'gray']);
        Tag::create(['name'  => 'Hierro', 'slug' => 'hierro', 'color' => 'pink']);
        Tag::create(['name'  => 'Suelda', 'slug' => 'suelda', 'color' => 'red']);
        Tag::create(['name'  => 'Aluminio', 'slug' => 'aluminio', 'color' => 'indigo']);
        $this->call(PostSeeder::class);

        Zona::factory(12)->create();
        GrupoEquipo::factory(12)->create();
        Equipo::factory(30)->create();
        GrupoMaterial::factory(12)->create();
        Material::factory(30)->create();
        GrupoObrero::factory(12)->create();
        Obrero::factory(30)->create();
        Transporte::factory(30)->create();

    }
}

