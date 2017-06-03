<?php

use Pagekit\Application;

// packages/pagekit/todo/index.php

return [

    'name' => 'github-user-repos',

    'type' => 'extension',

    // called when Pagekit initializes the module
    'main' => function (Application $app) {
    },
    'autoload' => [
      'Pagekit\\Repo\\' => 'src'
    ],
    'routes' => [
      '@repositories' => [
        'path' => '/repositories',
        'controller' => 'Pagekit\\Repo\\Controller\\RepoController'
      ]
    ],
    'resources' => [
    'repo:' => ''
      ],
    'config' => [
      'ghconfig' => [
        'ghusername' => '',
        'ghauthtoken' => '',
        'pageheadder' => '',
        'subtext' => '',
    ]


    ],
    'settings' => '@repositories/settings',

    'menu' => [
      'repository_config' => [
        'label' => 'Repositories',
        'url' => '@repositories/settings',
        'icon' => 'repo:icon.svg',
        'priority' => 130
      ],

    ],
];

?>
