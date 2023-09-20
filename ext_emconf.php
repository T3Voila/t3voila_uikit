<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'UIkit theme for TV+',
    'description' => 'Theme for TemplaVoilà! Plus using fluid',
    'author' => 'Alexander Opitz',
    'author_email' => 'alexander.opitz@googlemail.com',
    'author_company' => 'IBC Solar AG',
    'version' => '0.3.0',
    'state' => 'alpha',
    'clearcacheonload' => 1,
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
            'templavoilaplus' => '11.0.0-11.0.99',
        ],
    ],
];
