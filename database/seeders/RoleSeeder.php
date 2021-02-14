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

        Permission::create(['name' => 'admin.groups.index'])->syncRoles([$role1, $role2]);
        
        Permission::create(['name' => 'admin.users.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.users.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.users.update'])->syncRoles([$role1, $role2]);        

        Permission::create(['name' => 'admin.categories.index'])->syncRoles([$role1, $role2, $role3]);

        Permission::create(['name' => 'admin.tags.index'])->syncRoles([$role1, $role2, $role3, $role4]);

        Permission::create(['name' => 'admin.posts.index'])->syncRoles([$role1, $role2, $role3, $role4]);

        Permission::create(['name' => 'admin.comments.index'])->syncRoles([$role1, $role2, $role3, $role4, $role5]);

        Permission::create(['name' => 'admin.precios.index'])->syncRoles([$role1, $role2, $role3, $role4, $role5]);
        
        Permission::create(['name' => 'admin.presupuestos.index'])->syncRoles([$role1, $role2, $role3, $role4, $role5]);

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
