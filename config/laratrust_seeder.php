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
            'events' => 'c,r,u,d',
            'navigations' => 'c,r,u,d',
            'profile' => 'r,u'
        ], // End of Super Admin Roles

        'admin' => [
            'users' => 'c,r,u,d',
            'categories' => 'c,r,u,d',
            'blogs' => 'c,r,u,d',
            'events' => 'c,r,u,d',
            'navigations' => 'c,r,u,d',
            'profile' => 'r,u',
        ], // End of Admin Roles


        'blogger' => [
            'categories' => 'r',
            'blogs' => 'c,r,u,d',
            'events' => 'c,r,u,d',
            // 'navigations' => 'c,r,u',
            'profile' => 'r,u',
        ], // End of Blogger Roles


        'user' => [
            'categories' => 'r',
            'blogs' => 'r',
            'events' => 'r',
            // 'navigations' => 'r',
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
