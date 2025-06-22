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
<div class="news-list">
    <? if ($arParams["DISPLAY_TOP_PAGER"]): ?>
        <?= $arResult["NAV_STRING"] ?><br />
    <? endif; ?>

    <div class="row g-4 py-5">
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12">
                <div class="card news-card h-100 border-0 shadow-sm rounded-5"
                    id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                    <div class="row g-0 h-100">
                        <? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["PREVIEW_PICTURE"])): ?>
                            <div class="col-md-4">
                                <? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])): ?>
                                    <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
                                        <img class="img-fluid h-100 w-100 object-fit-cover rounded-start-5"
                                            src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                                            alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>">
                                    </a>
                                <? else: ?>
                                    <img class="img-fluid h-100 w-100 object-fit-cover rounded-start-5"
                                        src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                                        alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>">
                                <? endif; ?>
                            </div>
                        <? endif ?>

                        <div class="col-md-8">
                            <div class="card-body d-flex flex-column h-100 pe-4">
                                <? if ($arParams["DISPLAY_DATE"] != "N" && $arItem["DISPLAY_ACTIVE_FROM"]): ?>
                                    <div class="text-muted small mb-2 w-100"><?= $arItem["DISPLAY_ACTIVE_FROM"] ?></div>
                                <? endif ?>

                                <? if ($arParams["DISPLAY_NAME"] != "N" && $arItem["NAME"]): ?>
                                    <h5 class="mb-3 w-100 text-truncate">
                                        <? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])): ?>
                                            <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"
                                                class="text-decoration-none bx-link"><?= $arItem["NAME"] ?></a>
                                        <? else: ?>
                                            <?= $arItem["NAME"] ?>
                                        <? endif; ?>
                                    </h5>
                                <? endif; ?>

                                <? if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arItem["PREVIEW_TEXT"]): ?>
                                    <div class="card-text mb-3 flex-grow-1 w-100 text-wrap text-truncate"
                                        style="max-height: 6rem; overflow: hidden;">
                                        <?= $arItem["PREVIEW_TEXT"]; ?>
                                    </div>
                                <? endif; ?>

                                <div class="mt-auto w-100">
                                    <? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])): ?>
                                        <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="bx-link fw-bold">
                                            Подробнее →
                                        </a>
                                    <? endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <? endforeach; ?>
    </div>

    <? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
        <div class="mt-4"><?= $arResult["NAV_STRING"] ?></div>
    <? endif; ?>
</div>