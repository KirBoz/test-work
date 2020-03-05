<?php

return [
    'enablePrettyUrl' => true,
    'enableStrictParsing' => true,
    'showScriptName' => false,
    'rules' => [
        'GET retrieve/<id>' => 'random/retrieve',
        'POST generate' => 'random/generate',
    ],
];


