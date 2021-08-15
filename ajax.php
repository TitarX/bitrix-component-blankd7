<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Web\Json;

Loc::loadMessages(__FILE__);

global $USER;

$answer = array('status' => 'success');

if ($USER->IsAuthorized()) {
    $answer['status'] = 'failure';
    print Json::encode($answer);
    exit();
}

print Json::encode($answer);
