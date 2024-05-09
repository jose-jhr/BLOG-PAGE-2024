<?php

return [

    /*
    |--------------------------------------------------------------------------
    | CamawariPagina Admin language lines
    |--------------------------------------------------------------------------
    |
    */

    'navbar' => [
        'title' => 'Admin Menu',
    ],

    'drawer-nav' => [
        'dashboard'     => 'Cuadro de mando',
        'posts'         => 'Posts',
        'tags'          => 'Tags',
        'file-manager'  => 'Archivos',
        'users'         => 'Usuarios',
        'sitemap-admin' => 'Lugares y mapas',
        'themes'        => 'Temas',
        'roles'         => 'Roles',
        'phpinfo'       => 'PHP Info',
        'activity'      => 'Activity',
        'settings'      => 'Configuracion',
    ],

    'footer' => [

        'nav' => [
            'github'  => 'GitHub',
            'license' => 'License',
        ],

        'copyright' => '&copy; 2018 | Developed with Love <i class="fa fa-heart text-danger"></i> by Jeremy Kenedy',
    ],

    'access_levels' => [
        'roles'     => [
            'super-admin'   => 'Super Administrador',
            'admin'         => 'Administrador',
            'moderator'     => 'Moderador',
            'writer'        => 'Escritor',
            'user'          => 'Usuario',
        ],
        'permissions' => [
            'view-users'    => 'Visualizar usuarios',
            'create-users'  => 'Crear usuarios',
            'edit-users'    => 'Editar usuarios',
            'delete-users'  => 'Eliminar usuarios',
        ],
    ],

    'dashboard' => [
        'title'                     => 'dashboard',
        'header'                    => 'Bienvenido!',
        'welcome-card-title'        => 'Hi :username, Bienvenido al panel de administracion camawari',
        'welcome-card-sub-title'    => 'CamawariPagina Plataforma construido con laravel y Bootstrap 4.',
        'welcome-access'            => 'Tu Rol es: ',
        'access-level-string'       => '{0} Tu no tienes acceso|{1} Tu tiene accedo al nivel:|[2,*] Tu tienes acceso al nivel:',
        'welcome-card-footer'       => '<em></em> INGENIERIO JOSE HIDALGO. <strong>Sigueme en GITHUB!</strong>',
        'permissions-string'        => 'You have permissions:',
    ],

    'posts' => [
        'pages' => [
            'index' => [
                'title'     => 'Posts',
                'desc'      => '',
                'badge'     => 'Showing :per of :total',
                'header'    => 'Showing Blog Posts',
            ],
            'edit' => [
                'title'     => 'Editing Post Id: :id',
                'header'    => 'Edit Blog Post',
            ],
            'create' => [
                'title'     => 'Create New Post',
                'header'    => 'New Blog Post',
            ],
        ],
        'table' => [
            'title'  => 'Blogs',
            'titles' => [
                'id'        => 'Id',
                'published' => 'Publicado',
                'title'     => 'Titulo',
                'subtitle'  => 'Sub titulo',
                'author'    => 'Autor',
                'image'     => 'Imagen',
                'tags'      => 'Tags',
                'actions'   => 'Acciones',
            ],
        ],
    ],

    'buttons' => [
        'edit'          => 'Editar',
        'view'          => 'Visualizar',
        'delete'        => 'Borrar',
        'create'        => 'Crear Post',
        'create-tag'    => 'Crear Tag',
        'edit-tag'      => '<span class="hidden-xs hidden-sm hidden-md">Edit</span> <span class="hidden-xs hidden-sm hidden-md hidden-lg">Tag</span>',
    ],

    'modals' => [
        'delete-post' => [
            'close'     => 'Cerrar',
            'title'     => 'Confirmar Borrar',
            'message'   => 'Eliminar este post?',
            'cancel'    => 'Cancelar',
            'confirm'   => 'Confirmar Eliminar',
        ],
        'save-post' => [
            'close'     => 'Cerrar',
            'title'     => 'Confirm Guardar',
            'message'   => 'Guardar post con cambios?',
            'cancel'    => 'Cancelar',
            'confirm'   => 'Confirmar Guardar',
        ],
        'delete-tag' => [
            'close'     => 'Cerrar',
            'title'     => 'Confirmar Borrar',
            'message'   => 'Eliminar este tag?',
            'cancel'    => 'Cancelar',
            'confirm'   => 'Confirmar Eliminar',
        ],
    ],

    'loader' => [
        'message' => 'Cargando',
    ],

    'user_pages' => [
        'index'     => [
            'header' => 'Showing Users',
        ],
        'show'      => [
            'header' => 'Showing User',
        ],
        'edit'      => [
            'header' => 'Editing User',
        ],
        'create'    => [
            'header' => 'Creating User',
        ],
    ],

    'file_manager' => [
        'index'     => [
            'title'     => 'File Manager',
            'desc'      => '',
            'header'    => 'File Manager',
        ],
    ],

    'tags' => [
        'pages' => [
            'index' => [
                'title'     => 'Tags Manager',
                'desc'      => '',
                'header'    => 'Tags Manager',
                'badge'     => ':total Tags Total',
            ],
            'create' => [
                'title'     => 'Create New Tag',
                'desc'      => '',
                'header'    => 'Creating New Tag',
                'badge'     => ':total Tags Total',
            ],
            'update' => [
                'title'     => 'Tag Update',
                'desc'      => '',
                'header'    => 'Tag Update',
                'badge'     => ':total Tags Uses',
            ],
        ],
        'table' => [
            'title'  => 'Listing Tags',
            'titles' => [
                'id'                => 'Id',
                'tag'               => 'Tag',
                'title'             => 'Title',
                'subtitle'          => 'Subtitle',
                'post_image'        => 'Image',
                'used'              => 'Uses',
                'layout'            => 'Layout',
                'meta_description'  => 'Meta Description',
                'direction'         => 'Direction',
                'actions'           => 'Actions',
                'directions'        => [
                    'normal'    => 'Normal',
                    'reverse'   => 'Reverse',
                ],
            ],
        ],
    ],

    'sitemap' => [
        'title'             => 'Sitemap Admin',
        'header'            => 'Sitemap Admin',
        'card-title'        => 'Public Sitemap',
        'card-sub-title'    => '<span class="badge badge-secondary badge-pill">There are :count sitemap entries</span>',
        'preview'           => 'Sitemap Preview',
        'footer'            => 'Last Generated on: <strong>:date</srong>',
    ],

];
