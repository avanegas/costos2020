<?php

namespace Database\Seeders;

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
        Group::create(['name'  => 'ND']);
        Group::create(['name'  => 'ARQUITECTO']);
        Group::create(['name'  => 'INGENIERO']);
        Group::create(['name'  => 'ESPECIALISTA']);
        Group::create(['name'  => 'OBRERO']);
        Group::create(['name'  => 'PROFESIONAL']);
        Group::create(['name'  => 'PROVEEDOR']);

        //Page
        Page::create([
            'parent_id' => 1,
            'title'     => 'Quines somos',
            'slug'      => 'quienes-somos',
            'content'      => 'Contenido de quienes somos'
        ]);

        Page::create([
            'parent_id' => 1,
            'title'     => 'Misión',
            'slug'      => 'mision',
            'content'      => 'Contenido de mision'
        ]);

        Page::create([
            'parent_id' => 1,
            'title'     => 'Visión',
            'slug'      => 'vision',
            'content'      => 'Contenido de vision'
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

        Category::factory(12)->create();
        Tag::factory(12)->create();
        $this->call(PostSeeder::class);

        Zona::factory(12)->create();
        GrupoEquipo::factory(12)->create();
        Equipo::factory(30)->create();

    }
}

