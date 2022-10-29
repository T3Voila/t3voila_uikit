<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'UIkit theme for TV+',
    'description' => 'Theme for TemplaVoilà! Plus using fluid',
    'author' => 'Alexander Opitz',
    'author_email' => 'alexander.opitz@davitec.de',
    'author_company' => 'Davitec GmbH',
    'version' => '0.1.0',
    'state' => 'alpha',
    'clearcacheonload' => 1,
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-11.5.99',
            'templavoilaplus' => '8.1.2-',
            'tvplus_fluid' => '0.3.0-',
        ],
    ],
];
