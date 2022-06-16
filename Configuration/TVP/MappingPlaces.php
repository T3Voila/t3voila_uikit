<?php
declare(strict_types = 1);

return [
    'T3Voila\Theme\UIkit\Page\Mapping' => [
        'name' => 'UIkit Page Mappings',
        'path' => 'EXT:t3voila_uikit/Resources/Private/Mappings/Page',
        'scope' => \Tvp\TemplaVoilaPlus\Domain\Model\Scope::SCOPE_PAGE,
        'loadSaveHandler' => \Tvp\TemplaVoilaPlus\Handler\LoadSave\YamlLoadSaveHandler::$identifier,
    ],
    'T3Voila\Theme\UIkit\Content\Mapping' => [
        'name' => 'UIkit Content Mappings',
        'path' => 'EXT:t3voila_uikit/Resources/Private/Mappings/Content',
        'scope' => \Tvp\TemplaVoilaPlus\Domain\Model\Scope::SCOPE_FCE,
        'loadSaveHandler' => \Tvp\TemplaVoilaPlus\Handler\LoadSave\YamlLoadSaveHandler::$identifier,
    ],
];
