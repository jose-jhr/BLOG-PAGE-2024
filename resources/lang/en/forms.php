<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Lara(b)log forms language lines
    |--------------------------------------------------------------------------
    |
    */

    'edit-post' => [
        'id-title'  => 'Post id: :id',
        'title'     => 'Editing Post',
        'labels'    => [
            'post-title'            => 'Post Title',
            'post-subtitle'         => 'Post Subtitle',
            'post-post_image'       => 'Post Image',
            'post-image-url'        => 'Post Image Path\Url',
            'post-slug'             => 'Post Slug',
            'post-content'          => 'Post Content',
            'post-publish_date'     => 'Publish Date',
            'post-publish_time'     => 'Publish Time',
            'post-is_draft'         => 'Is Draft?',
            'post-tags'             => 'Post Tags',
            'post-layout'           => 'Post Layout',
            'post-author'           => 'Post Author',
            'post-meta_description' => 'Meta Description',

        ],
        'buttons' => [
            'save-finished'     => '<i class="fa fa-floppy-o fa-fw" aria-hidden="true"></i> Save',
            'save-continue'     => '<i class="fa fa-floppy-o fa-fw" aria-hidden="true"></i> Save',
            'delete'            => '<i class="fa fa-times-circle fa-fw" aria-hidden="true"></i> Delete',
            'choose-image'      => '<i class="nc-icon nc-album-2" aria-hidden="true"></i> Choose Post Image',
        ],
    ],

    'create-post' => [
        'title'     => 'Creating New Post',
        'badge'     => 'Not Saved',
    ],

    'create-tag' => [
        'title'     => '<i class="fa fa-tag fa-fw" aria-hidden="true"></i> Create New Tag',
        'labels'    => [
            'tag'                   => 'Tag',
            'title'                 => 'Tag Title',
            'subtitle'              => 'Tag Subtitle',
            'meta_description'      => 'Tag Meta Description',
            'tag-post_image'        => 'Tag Image',
            'tag-image-url'         => 'Tag Image Path\Url',
            'tag-layout'            => 'Tag Layout',
            'reverse_direction'     => 'Sort Direction',
            'sort-direction'        => [
                'normal'    => 'Normal',
                'reversed'  => 'Reversed',
            ],
        ],
        'buttons' => [
            'add-new'       => '<i class="fa fa-plus-circle" aria-hidden="true"></i> Add New Tag',
            'choose-image'  => '<i class="nc-icon nc-album-2" aria-hidden="true"></i> Choose Tag Image',
        ],
    ],

    'update-tag' => [
        'title'     => '<i class="fa fa-tag fa-fw" aria-hidden="true"></i> Updating Tag <strong>:tag</strong>',
        'buttons'   => [
            'update'        => '<i class="fa fa-check fa-fw" aria-hidden="true"></i> Update Tag',
            'choose-image'  => '<i class="nc-icon nc-album-2" aria-hidden="true"></i> Choose Tag Image',
        ],
    ],

    'contact' => [
        'labels' => [
            'firstname' => 'Nombre *',
            'lastname'  => 'Apellido',
            'email'     => 'Correo Electrónico *',
            'phone'     => 'Número de Teléfono',
            'message'   => 'Mensaje *',
        ],
        'placeholders' => [
            'firstname' => 'Por favor ingresa tu nombre *',
            'lastname'  => 'Por favor ingresa tu apellido',
            'email'     => 'Por favor ingresa tu correo electrónico *',
            'phone'     => 'Por favor ingresa tu número de teléfono',
            'message'   => 'Por favor ingresa tu mensaje *',
        ],
        'buttons' => [
            'send' => 'Enviar Mensaje',
        ],
        'messages' => [
            'required'  => '<strong>*</strong> Campos requeridos.',
            'sent'      => 'Gracias por tu mensaje. Ha sido enviado.',
        ],
        'validation' => [
            'captcha' => 'El captcha es requerido',
        ],
    ],

    'sitemap' => [
        'buttons' => [
            'generate'  => 'Generate Sitemap',
            'view'      => 'View Sitemap',
        ],
        'placeholders' => [
            'limit' => 'Page Limit',
        ],
        'messages' => [
            'success'  => 'Sitemap Generated',
        ],
    ],

];
