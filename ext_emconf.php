<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'UIkit theme for TV+',
    'description' => 'Theme for TemplaVoilà! Plus using fluid',
    'author' => 'Alexander Opitz',
    'author_email' => 'opitz@extrameile-gehen.de',
    'author_company' => 'Extrameile GmbH',
    'version' => '0.1.0',
    'state' => 'alpha',
    'clearcacheonload' => 1,
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-11.5.99',
            'templavoilaplus' => '8.0.4-',
            'tvplus_fluid' => '0.0.1-',
        ],
    ],
];
