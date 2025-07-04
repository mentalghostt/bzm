<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

if (empty($arResult))
    return "";

$strReturn = '';

$css = $APPLICATION->GetCSSArray();
if (!is_array($css) || !in_array("/bitrix/css/main/font-awesome.css", $css)) {
    $strReturn .= '<link href="' . CUtil::GetAdditionalFileURL("/bitrix/css/main/font-awesome.css") . '" type="text/css" rel="stylesheet" />' . "\n";
}

$strReturn = '<nav>';
$strReturn .= '<ul class="breadcrumb">';

$itemSize = count($arResult);
for ($index = 0; $index < $itemSize; $index++) {
    $title = htmlspecialcharsex($arResult[$index]["TITLE"]);
    $arrow = ($index > 0 ? '<li class="breadcrumb-divider d-flex align-items-center px-2"><span>/</span></li>' : '');

    if ($arResult[$index]["LINK"] <> "" && $index != $itemSize - 1) {
        $strReturn .= $arrow . '
        <li class="breadcrumb-item">
            <a href="' . $arResult[$index]["LINK"] . '" title="' . $title . '">
                <span>' . $title . '</span>
            </a>
            <meta content="' . ($index + 1) . '" />
        </li>';
    } else {
        $strReturn .= $arrow . '
        <li class="breadcrumb-item-active">
            <span>' . $title . '</span>
        </li>';
    }
}

$strReturn .= '</ul>';
$strReturn .= '</nav>';

return $strReturn;