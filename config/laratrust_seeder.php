<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [

        'super_admin' => [
            'users' => 'c,r,u,d',
            'categories' => 'c,r,u,d',
            'blogs' => 'c,r,u,d',
            'products' => 'c,r,u,d',
            'clients' => 'c,r,u,d',
            'suppliers' => 'c,r,u,d',
            'orders' => 'c,r,u,d',
            'supply_orders' => 'c,r,u,d',
            'profile' => 'r,u'
        ], // End of Super Admin Roles

        'admin' => [
            'users' => 'c,r,u,d',
            'categories' => 'c,r,u,d',
            'blogs' => 'c,r,u,d',
            'products' => 'c,r,u,d',
            'clients' => 'c,r,u,d',
            'suppliers' => 'c,r,u,d',
            'orders' => 'c,r,u,d',
            'supply_orders' => 'c,r,u,d',
            'profile' => 'r,u',
        ], // End of Admin Roles


        'user' => [
            'categories' => 'r',
            'products' => 'r',
            'clients' => 'r',
            'suppliers' => 'r',
            'orders' => 'r',
            'supply_orders' => 'r',
            'profile' => 'r,u',
        ], // End of User Roles

    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
