<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if (empty($arResult))
    return "";

$strReturn = '';

//we can't use $APPLICATION->SetAdditionalCSS() here because we are inside the buffered function GetNavChain()
$css = $APPLICATION->GetCSSArray();
if (!is_array($css) || !in_array("/bitrix/css/main/font-awesome.css", $css)) {
    $strReturn .= '<link href="' . CUtil::GetAdditionalFileURL("/bitrix/css/main/font-awesome.css") . '" type="text/css" rel="stylesheet" />' . "\n";
}

$strReturn = '<nav aria-label="breadcrumb class="d-flex align-items-center>';
$strReturn .= '<ul class="breadcrumb  pt-5">'; // Открываем список один раз перед циклом

$itemSize = count($arResult);
for ($index = 0; $index < $itemSize; $index++) {
    $title = htmlspecialcharsex($arResult[$index]["TITLE"]);
    $arrow = ($index > 0 ? '<li class="breadcrumb-divider px-2 d-flex align-items-center">/</li>' : '');

    if ($arResult[$index]["LINK"] <> "" && $index != $itemSize - 1) {
        $strReturn .= $arrow . '
        <li class="breadcrumb-item">
            <a class="bx-link" href="' . $arResult[$index]["LINK"] . '" title="' . $title . '">
                <span>' . $title . '</span>
            </a>
            <meta content="' . ($index + 1) . '" />
        </li>';
    } else {
        $strReturn .= $arrow . '
        <li class="breadcrumb-item active" aria-current="page">
            <span>' . $title . '</span>
        </li>';
    }
}

$strReturn .= '</ul>'; // Закрываем список после цикла
$strReturn .= '</nav>';

return $strReturn;