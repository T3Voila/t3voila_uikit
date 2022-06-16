<?php
declare(strict_types=1);

return [
    'T3Voila\Theme\UIkit\Page\DataStructure' => [
        'name' => 'UIkit Page DataStructures',
        'path' => 'EXT:t3voila_uikit/Resources/Private/DataStructure/Page',
        'scope' => \Tvp\TemplaVoilaPlus\Domain\Model\Scope::SCOPE_PAGE,
        'loadSaveHandler' => \Tvp\TemplaVoilaPlus\Handler\LoadSave\XmlLoadSaveHandler::$identifier,
        'indentation' => 4,
    ],
    'T3Voila\Theme\UIkit\Content\DataStructure' => [
        'name' => 'UIkit Content DataStructures',
        'path' => 'EXT:t3voila_uikit/Resources/Private/DataStructure/Content',
        'scope' => \Tvp\TemplaVoilaPlus\Domain\Model\Scope::SCOPE_FCE,
        'loadSaveHandler' => \Tvp\TemplaVoilaPlus\Handler\LoadSave\XmlLoadSaveHandler::$identifier,
        'indentation' => 4,
    ],
];
