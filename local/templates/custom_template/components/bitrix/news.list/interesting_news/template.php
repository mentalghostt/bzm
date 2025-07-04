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
<div class="row d-flex align-items-center inter-news-head">
	<h1 class="col-md-10 col-xs-12 fw-bold inter-news-name">Полезные статьи</h1>
	<a class="col-md-2 col-xs-12 orange-text justify-content-end-md fw-bold" href="expluatation/">
		<p class="d-md-flex justify-content-end inter-news-link">
			Смотреть все →
		</p>
	</a>
</div>

<div class="news-list">
	<? if ($arParams["DISPLAY_TOP_PAGER"]): ?>
		<?= $arResult["NAV_STRING"] ?><br />
	<? endif; ?>

	<div class="row gapper">
		<? foreach ($arResult["ITEMS"] as $arItem): ?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<div class="col-xl-4 col-md-6 col-sm-12 px-4">
				<div class="card news-card h-100 rounded-4" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
					<? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["PREVIEW_PICTURE"])): ?>
						<div class="card-img-top rounded-top-4">
							<? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])): ?>
								<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
									<img class="img-fluid w-100" src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
										width="<?= $arItem["PREVIEW_PICTURE"]["WIDTH"] ?>"
										height="<?= $arItem["PREVIEW_PICTURE"]["HEIGHT"] ?>"
										alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
										title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>" />
								</a>
							<? else: ?>
								<img class="img-fluid w-100" src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
									width="<?= $arItem["PREVIEW_PICTURE"]["WIDTH"] ?>"
									height="<?= $arItem["PREVIEW_PICTURE"]["HEIGHT"] ?>"
									alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
									title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>" />
							<? endif; ?>
						</div>
					<? endif ?>

					<div class="card-body">
						<? if ($arParams["DISPLAY_NAME"] != "N" && $arItem["NAME"]): ?>
							<div class="title-container mb-1 w-100" style="max-width: 100%; overflow: hidden;">
								<h6 class="card-title m-0">
									<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="text-decoration-none fw-bold"
										style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; height: 3.3em; width: 14em; line-height: 1.4em; padding: 9px 0 0 3px"><?= $arItem["NAME"] ?></a>
								</h6>
							</div>
						<? endif; ?>

						<? if ($arParams["DISPLAY_DATE"] != "N" && $arItem["DISPLAY_ACTIVE_FROM"]): ?>
							<div class="text-muted small p-1"><?= $arItem["DISPLAY_ACTIVE_FROM"] ?></div>
						<? endif ?>

						<? if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arItem["PREVIEW_TEXT"]): ?>
							<div class="card-text"><?= $arItem["PREVIEW_TEXT"]; ?></div>
						<? endif; ?>

						<? foreach ($arItem["FIELDS"] as $code => $value): ?>
							<div class="small text-muted mt-1">
								<?= GetMessage("IBLOCK_FIELD_" . $code) ?>: <?= $value; ?>
							</div>
						<? endforeach; ?>

						<? foreach ($arItem["DISPLAY_PROPERTIES"] as $pid => $arProperty): ?>
							<div class="small text-muted mt-1">
								<?= $arProperty["NAME"] ?>:
								<? if (is_array($arProperty["DISPLAY_VALUE"])): ?>
									<?= implode(" / ", $arProperty["DISPLAY_VALUE"]); ?>
								<? else: ?>
									<?= $arProperty["DISPLAY_VALUE"]; ?>
								<? endif ?>
							</div>
						<? endforeach; ?>
					</div>
				</div>
			</div>
		<? endforeach; ?>
	</div>

	<? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
		<div class="mt-4"><?= $arResult["NAV_STRING"] ?></div>
	<? endif; ?>
</div>