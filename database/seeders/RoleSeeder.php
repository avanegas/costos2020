<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'NumberOne']);
        $role2 = Role::create(['name' => 'Admin']);
        $role3 = Role::create(['name' => 'Manager']);
        $role4 = Role::create(['name' => 'Blogger']);
        $role5 = Role::create(['name' => 'Planner']);
        $role6 = Role::create(['name' => 'User']);

        Permission::create(['name' => 'admin.zonas.index', 'description' => 'Ver lista de zonas'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.zonas.create', 'description' => 'Crear zona'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.zonas.edit', 'description' => 'Editar zona'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.zonas.destroy', 'description' => 'Eliminar zona'])->syncRoles([$role1, $role2]); 

        Permission::create(['name' => 'admin.groups.index', 'description' => 'Ver lista de grupos para usuarios'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.groups.create', 'description' => 'Crear grupo para usuarios'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.groups.edit', 'description' => 'Editar grupo para usuarios'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.groups.destroy', 'description' => 'Eliminar grupo para usuarios'])->syncRoles([$role1, $role2]); 
        
        Permission::create(['name' => 'admin.users.index', 'description' => 'Ver lista de usuarios'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.users.edit', 'description' => 'Asignar un Rol'])->syncRoles([$role1, $role2]);
    //    Permission::create(['name' => 'admin.users.update', 'description' => ''])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.permissions.index', 'description' => 'Ver lista de permisos'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.permissions.create', 'description' => 'Crear permiso'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.permissions.edit', 'description' => 'Editar permiso'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.permissions.destroy', 'description' => 'Eliminar permiso'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.roles.index', 'description' => 'Ver lista de roles'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.roles.create', 'description' => 'Crear rol'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.roles.edit', 'description' => 'Editar rol'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.roles.destroy', 'description' => 'Eliminar rol'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.categories.index', 'description' => 'Ver lista de categorías'])->syncRoles([$role1, $role2,$role3, $role4]);
        Permission::create(['name' => 'admin.categories.create', 'description' => 'Crear categoría'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'admin.categories.edit', 'description' => 'Editar categoría'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'admin.categories.destroy', 'description' => 'Eliminar categoría'])->syncRoles([$role1, $role2, $role3]);

        Permission::create(['name' => 'admin.tags.index', 'description' => 'Ver lista de etiquetas'])->syncRoles([$role1, $role2, $role3, $role4]);
        Permission::create(['name' => 'admin.tags.create', 'description' => 'Crear etiqueta'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'admin.tags.edit', 'description' => 'Editar etiqueta'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' =>'admin.tags.destroy', 'description' => 'Eliminar etiqueta'])->syncRoles([$role1, $role2, $role3]);

        Permission::create(['name' => 'admin.posts.index', 'description' => 'Ver lista de post'])->syncRoles([$role1, $role2, $role3, $role4]);
        Permission::create(['name' => 'admin.posts.create', 'description' => 'Crear post'])->syncRoles([$role1, $role2, $role3, $role4]);
        Permission::create(['name' => 'admin.posts.edit', 'description' => 'Editar post'])->syncRoles([$role1, $role2, $role3, $role4]);
        Permission::create(['name' => 'admin.posts.destroy', 'description' => 'Eliminar post'])->syncRoles([$role1, $role2, $role3, $role4]);

        Permission::create(['name' => 'admin.comments.index', 'description' => 'Ver lista de comentarios'])->syncRoles([$role1, $role2, $role3, $role4, $role5]);

        Permission::create(['name' => 'admin.precios.index', 'description' => 'Ver lista de precios'])->syncRoles([$role1, $role2, $role3, $role4, $role5]);
        Permission::create(['name' => 'admin.precios.create', 'description' => 'Crear precio'])->syncRoles([$role1, $role2, $role3, $role4, $role5]);
        Permission::create(['name' => 'admin.precios.edit', 'description' => 'Editar precio'])->syncRoles([$role1, $role2, $role3, $role4, $role5]);
        Permission::create(['name' => 'admin.precios.destroy', 'description' => 'Eliminar precio'])->syncRoles([$role1, $role2, $role3, $role4, $role5]);
        
        Permission::create(['name' => 'admin.presupuestos.index', 'description' => 'Ver lista de presupuestos'])->syncRoles([$role1, $role2, $role3, $role4, $role5]);
        Permission::create(['name' => 'admin.presupuestos.create', 'description' => 'Crear presupuesto'])->syncRoles([$role1, $role2, $role3, $role4, $role5]);
        Permission::create(['name' => 'admin.presupuestos.edit', 'description' => 'Editar Presupuesto'])->syncRoles([$role1, $role2, $role3, $role4, $role5]);
        Permission::create(['name' =>'admin.presupuestos.destroy', 'description' => 'Eliminar Presupuesto'])->syncRoles([$role1, $role2, $role3, $role4, $role5]);
        
        Permission::create(['name' => 'admin.home', 'description' => 'Ver el dashboard'])->syncRoles([$role1, $role2, $role3, $role4, $role5]);

        // create permissions
        //Permission::create(['name' => 'Administer roles & permissions']);
        //Permission::create(['name' => 'Create Post']);
        //Permission::create(['name' => 'Edit Post']);
        //Permission::create(['name' => 'Delete Post']);
        //Permission::create(['name' => 'Publish Post']);
        //Permission::create(['name' => 'Unpublish Post']);
        //Permission::create(['name' => 'Comment Post']);

        // create roles and assign existing permissions
        //$role = Role::create(['name' => 'admin']);
        //$role->givePermissionTo(['Administer roles & permissions', 'Create Post', 'Edit Post', 'Delete Post',  'Publish //Post', 'Unpublish Post', 'Comment Post']);

        //$role = Role::create(['name' => 'user']);
        //$role->givePermissionTo('Comment Post');

        //$role = Role::create(['name' => 'writer']);
        //$role->givePermissionTo('Create Post');
    }
}
