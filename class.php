<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Loader;

Loc::loadMessages(__FILE__);

class CBlankd7Component extends CBitrixComponent
{
    public function onPrepareComponentParams($arParams): array
    {
        return $arParams;
    }

    public function executeComponent(): void
    {
        if (!Loader::includeModule('iblock')) {
            ShowError(Loc::getMessage('BLANKD7_COMPONENT_IBLOCK_MODULE_NONE'));
            return;
        }

        if (empty($arParams['PRODUCTS_IBLOCK_ID'])
            || !is_numeric($arParams['PRODUCTS_IBLOCK_ID'])) {
            ShowError(Loc::getMessage('BLANKD7_COMPONENT_NO_PARAMS'));
            return;
        }

        if ($this->startResultCache(false)) {
            //

            $this->includeComponentTemplate();
        }
    }
}
