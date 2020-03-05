<?php

use yii\web\UrlNormalizer;

return [
    'class' => '\yii\web\UrlManager',
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'enableStrictParsing' => false,
    'normalizer' => [
        'class' => 'yii\web\UrlNormalizer',
        'action' => UrlNormalizer::ACTION_REDIRECT_PERMANENT,
        'collapseSlashes' => true,
        'normalizeTrailingSlash' => true,
    ],
    'rules' => [
        '/' => 'site/index',
    ],
];
