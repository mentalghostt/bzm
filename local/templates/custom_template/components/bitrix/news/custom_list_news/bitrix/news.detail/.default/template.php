<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="news-detail-container">
    <div class="news-header mb-5 mh-4">
        <? if ($arParams["DISPLAY_NAME"] != "N" && $arResult["NAME"]): ?>
            <h1 class="news-title mb-4"><?= $arResult["NAME"] ?></h1>
        <? endif; ?>
    </div>

    <div class="news-content-wrapper bg-white rounded-4 p-4">
        <? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arResult["DETAIL_PICTURE"])): ?>
            <div class="news-image mb-5">
                <img class="img-fluid rounded-1 w-100" src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>"
                    width="<?= $arResult["DETAIL_PICTURE"]["WIDTH"] ?>"
                    height="<?= $arResult["DETAIL_PICTURE"]["HEIGHT"] ?>" alt="<?= $arResult["DETAIL_PICTURE"]["ALT"] ?>"
                    title="<?= $arResult["DETAIL_PICTURE"]["TITLE"] ?>">
            </div>
        <? endif ?>

        <div class="news-text-content">
            <? if ($arResult["NAV_RESULT"]): ?>
                <? if ($arParams["DISPLAY_TOP_PAGER"]): ?>
                    <?= $arResult["NAV_STRING"] ?><br />
                <? endif; ?>
                <? echo $arResult["NAV_TEXT"]; ?>
                <? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
                    <br /><?= $arResult["NAV_STRING"] ?>
                <? endif; ?>
            <? elseif ($arResult["DETAIL_TEXT"] <> ''): ?>
                <div class="news-text">
                    <?= $arResult["DETAIL_TEXT"]; ?>
                </div>
            <? else: ?>
                <div class="news-text">
                    <?= $arResult["PREVIEW_TEXT"]; ?>
                </div>
            <? endif ?>
        </div>
    </div>

    <? if (!empty($arResult["FIELDS"]) || !empty($arResult["DISPLAY_PROPERTIES"])): ?>
        <div class="news-additional-info mt-5 pt-4 border-top">
            <? foreach ($arResult["FIELDS"] as $code => $value): ?>
                <? if ('PREVIEW_PICTURE' == $code || 'DETAIL_PICTURE' == $code)
                    continue; ?>
                <div class="info-item mb-3">
                    <strong><?= GetMessage("IBLOCK_FIELD_" . $code) ?>:</strong>
                    <span><?= $value; ?></span>
                </div>
            <? endforeach; ?>

            <? foreach ($arResult["DISPLAY_PROPERTIES"] as $pid => $arProperty): ?>
                <div class="info-item mb-3">
                    <strong><?= $arProperty["NAME"] ?>:</strong>
                    <span>
                        <? if (is_array($arProperty["DISPLAY_VALUE"])): ?>
                            <?= implode(", ", $arProperty["DISPLAY_VALUE"]); ?>
                        <? else: ?>
                            <?= $arProperty["DISPLAY_VALUE"]; ?>
                        <? endif ?>
                    </span>
                </div>
            <? endforeach; ?>
        </div>
    <? endif; ?>
</div>