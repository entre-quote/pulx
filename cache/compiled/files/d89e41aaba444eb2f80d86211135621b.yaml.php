<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/dev/Boulot/Mathieu Roy/PulX/pulx/user/config/site.yaml',
    'modified' => 1526282707,
    'data' => [
        'title' => 'PulX',
        'default_lang' => 'fr',
        'author' => [
            'name' => 'Joe Bloggs',
            'email' => 'joe@test.com'
        ],
        'taxonomies' => [
            0 => 'Transmission',
            1 => 'Création',
            2 => 'Performance',
            3 => 'Actualités',
            4 => 'Projet en avant',
            5 => 'Archives'
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
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
