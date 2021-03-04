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

        Permission::create(['name' => 'admin.zonas.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.zonas.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.zonas.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.zonas.destroy'])->syncRoles([$role1, $role2]); 

        Permission::create(['name' => 'admin.groups.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.groups.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.groups.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.groups.destroy'])->syncRoles([$role1, $role2]); 
        
        Permission::create(['name' => 'admin.users.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.users.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.users.update'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.permissions.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.permissions.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.permissions.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.permissions.destroy'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.roles.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.roles.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.roles.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.roles.destroy'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.categories.index'])->syncRoles([$role1, $role2,$role3, $role4]);
        Permission::create(['name' => 'admin.categories.create'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'admin.categories.edit'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'admin.categories.destroy'])->syncRoles([$role1, $role2, $role3]);

        Permission::create(['name' => 'admin.tags.index'])->syncRoles([$role1, $role2, $role3, $role4]);
        Permission::create(['name' => 'admin.tags.create'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'admin.tags.edit'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'admin.tags.destroy'])->syncRoles([$role1, $role2, $role3]);

        Permission::create(['name' => 'admin.posts.index'])->syncRoles([$role1, $role2, $role3, $role4]);
        Permission::create(['name' => 'admin.posts.create'])->syncRoles([$role1, $role2, $role3, $role4]);
        Permission::create(['name' => 'admin.posts.edit'])->syncRoles([$role1, $role2, $role3, $role4]);
        Permission::create(['name' => 'admin.posts.destroy'])->syncRoles([$role1, $role2, $role3, $role4]);

        Permission::create(['name' => 'admin.comments.index'])->syncRoles([$role1, $role2, $role3, $role4, $role5]);

        Permission::create(['name' => 'admin.precios.index'])->syncRoles([$role1, $role2, $role3, $role4, $role5]);
        Permission::create(['name' => 'admin.precios.create'])->syncRoles([$role1, $role2, $role3, $role4, $role5]);
        Permission::create(['name' => 'admin.precios.edit'])->syncRoles([$role1, $role2, $role3, $role4, $role5]);
        Permission::create(['name' => 'admin.precios.destroy'])->syncRoles([$role1, $role2, $role3, $role4, $role5]);
        
        Permission::create(['name' => 'admin.presupuestos.index'])->syncRoles([$role1, $role2, $role3, $role4, $role5]);
        Permission::create(['name' => 'admin.presupuestos.create'])->syncRoles([$role1, $role2, $role3, $role4, $role5]);
        Permission::create(['name' => 'admin.presupuestos.edit'])->syncRoles([$role1, $role2, $role3, $role4, $role5]);
        Permission::create(['name' => 'admin.presupuestos.destroy'])->syncRoles([$role1, $role2, $role3, $role4, $role5]);
        
        Permission::create(['name' => 'admin.home'])->syncRoles([$role1, $role2, $role3, $role4, $role5]);

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
