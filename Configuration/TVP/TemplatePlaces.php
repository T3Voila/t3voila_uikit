<?php
declare(strict_types = 1);

return [
    'T3Voila\Theme\UIkit\Page\Template' => [
        'name' => 'UIkit Page Templates',
        'path' => 'EXT:t3voila_uikit/Resources/Private/Templates/Page',
        'recursive' => true, // @TODO Not yet implemented
        'scope' => \Tvp\TemplaVoilaPlus\Domain\Model\Scope::SCOPE_PAGE,
        'loadSaveHandler' => \Tvp\TemplaVoilaPlus\Handler\LoadSave\YamlLoadSaveHandler::$identifier,
    ],
    'T3Voila\Theme\UIkit\Content\Template' => [
        'name' => 'UIkit Content Templates',
        'path' => 'EXT:t3voila_uikit/Resources/Private/Templates/Content',
        'recursive' => true, // @TODO Not yet implemented
        'scope' => \Tvp\TemplaVoilaPlus\Domain\Model\Scope::SCOPE_FCE,
        'loadSaveHandler' => \Tvp\TemplaVoilaPlus\Handler\LoadSave\YamlLoadSaveHandler::$identifier,
    ],
];
