<?php 


return [
    'display_name' => 'Addons :: Git',

    'filters' => [
        'enabled' => [ 'attributes', 'markdown', 'toc', 'header', 'doctags', 'buttons' ],
        'toc'     => [
            'header_link_show' => true,
        ],
    ],

    'git' => [
        'enabled'    => true,
        'owner'      => 'codex-project',
        'repository' => 'addon-git',
        'connection' => 'github',
        'sync'       => [
            'constraints' => [
                'branches' => [ 'master' ],
                'versions' => '>=1.0.0', //1.x || >=2.5.0 || 5.0.0 - 7.2.3'
            ],
            'paths'       => [
                'docs'  => 'docs',
                'menu'  => 'docs/menu.yml',
                'index' => 'docs/index.md',
            ],
        ],
        'webhook'    => [
            'enabled' => true,
            'secret'  => env('CODEX_GIT_GITHUB_WEBHOOK_SECRET', ''),
        ],
    ],
];
