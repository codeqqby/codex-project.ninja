<?php
/**
 * Part of the CLI PHP packages.
 *
 * License and copyright information bundled with this package in the LICENSE file
 */

return [
    'display_name' => 'Codex',

    'filters' => [
        'enabled' => [ 'attributes', 'markdown', 'toc', 'header', 'phpdoc', 'doctags', 'buttons' ],
        'toc'     => [
            'header_link_show' => true,
        ],
    ],

    'phpdoc' => [
        'enabled' => true,
        'default_class' => 'Codex\\\Codex',
    ],

    'git'  => [
        'enabled' => true,
        'owner'      => 'codex-project',
        'repository' => 'core',
        'connection'     => 'github',
        'sync'       => [
            'constraints' => [
                'branches' => [ 'master' ],
                'versions' => '>=1.0.0', //1.x || >=2.5.0 || 5.0.0 - 7.2.3'
            ],
            'paths'       => [
                'docs'  => 'docs',
                'menu'  => 'docs/menu.yml',
                'index' => 'docs/index.md'
            ]
        ],
        'webhook'    => [
            'enabled' => true
        ],
    ],
];