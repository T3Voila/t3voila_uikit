<?php
$EM_CONF['t3voila_uikit'] = [
    'title' => 'UIkit theme for TV+',
    'description' => 'Theme for TemplaVoilà! Plus using fluid',
    'author' => 'Alexander Opitz',
    'author_email' => 'alexander.opitz@googlemail.com',
    'author_company' => 'IBC Solar AG',
    'version' => '0.5.0-dev',
    'state' => 'alpha',
    'clearcacheonload' => 1,
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
            'templavoilaplus' => '12.0.0-12.0.99',
        ],
    ],
];
