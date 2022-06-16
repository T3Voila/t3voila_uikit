<?php
declare(strict_types=1);

return [
    'T3Voila\Theme\UIkit\BackendLayout' => [
        'name' => 'UIkit BackendLayouts',
        'path' => 'EXT:t3voila_uikit/Resources/Private/BackendLayouts',
        'loadSaveHandler' => Tvp\TemplaVoilaPlus\Handler\LoadSave\YamlLoadSaveHandler::$identifier,
    ],
    'T3Voila\Theme\UIkit\BackendLayoutBackup' => [
        'name' => 'UIkit BackendLayouts',
        'path' => 'EXT:t3voila_uikit/Resources/Private/BackendLayouts',
        'loadSaveHandler' => Tvp\TemplaVoilaPlus\Handler\LoadSave\MarkerBasedFileLoadSaveHandler::$identifier,
    ],
];
