<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/dev/Boulot/Mathieu Roy/PulX/pulx/user/config/site.yaml',
    'modified' => 1542299983,
    'data' => [
        'title' => 'PulX',
        'default_lang' => 'fr',
        'author' => [
            'name' => 'Joe Bloggs',
            'email' => 'joe@test.com'
        ],
        'taxonomies' => [
            0 => 'Transmission',
            1 => 'Spectacle',
            2 => 'Performance',
            3 => 'Actualités',
            4 => 'Projet en avant',
            5 => 'Archives'
        ],
        'metadata' => [
            'description' => 'PulX / Elsa Decaudin & … est une structure installée à Montpellier depuis 2004 qui a conçu et diffusé divers projets artistiques et culturels autour du mouvement.'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 3000,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
