<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'UIkit theme for TV+',
    'description' => 'Theme for TemplaVoilà! Plus using fluid',
    'author' => 'Alexander Opitz',
    'author_email' => 'alexander.opitz@davitec.de',
    'author_company' => 'Davitec GmbH',
    'version' => '0.2.0',
    'state' => 'alpha',
    'clearcacheonload' => 1,
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'templavoilaplus' => '8.1.3-8.2.99',
            'tvplus_fluid' => '0.3.0-',
        ],
    ],
];
