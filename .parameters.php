<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$arComponentParameters = array(
    'PARAMETERS' => array(
        'PRODUCTS_IBLOCK_ID' => array(
            'NAME' => Loc::getMessage('BLANKD7_COMPONENT_PRODUCTS_IBLOCK_ID_PARAMETER_NAME'),
            'TYPE' => 'STRING',
        ),
        'CACHE_TIME' => array('DEFAULT' => 36000000)
    )
);
