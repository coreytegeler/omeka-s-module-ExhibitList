<?php
namespace ExhibitList;
return [
    'block_layouts' => [
        'invokables' => [
            'exhibitList' => 'ExhibitList\Site\BlockLayout\ExhibitList',
        ],
    ],
    'view_helpers' => [
        'factories' => [
            'blockAttachmentsForm' => Service\ViewHelper\ExhibitList::class,
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            OMEKA_PATH . '/modules/ExhibitList/view',
        ],
        'template_map' => [
            'omeka/site-admin/page/edit' => OMEKA_PATH . '/themes/view-from-ginling/view/omeka/site-admin/page/edit.phtml',
         ],
    ],

];
