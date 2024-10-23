<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Numbered pagination for EXT:solr',
    'description' => 'Limit the amount of used pages in EXT:solr in the pagination',
    'category' => 'plugin',
    'author' => 'Georg Ringer',
    'author_email' => 'gr@studiomitte.com',
    'state' => 'stable',
    'version' => '1.0.4',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-12.4.99',
            'solr' => '11.5.0-12.99.99',
            'numbered_pagination' => '1.0.0-1.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
