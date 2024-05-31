<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$arComponentParameters = [
    'PARAMETERS' => [
        'PRODUCTS_IBLOCK_ID' => [
            'NAME' => Loc::getMessage('BLANKD7_COMPONENT_PRODUCTS_IBLOCK_ID_PARAMETER_NAME'),
            'TYPE' => 'STRING',
        ],
        'CACHE_TIME' => ['DEFAULT' => '36000000']
    ]
];
