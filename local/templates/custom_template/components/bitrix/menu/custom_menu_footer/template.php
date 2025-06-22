<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die(); ?>

<? if (!empty($arResult)): ?>
	<ul class="list-unstyled menu-footer">

		<?
		foreach ($arResult as $arItem):
			if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
				continue;
			?>
			<? if ($arItem["SELECTED"]): ?>
				<li class="mb-2 bx-link"><a class="bx-link" href="<?= $arItem["LINK"] ?>" class="selected"><?= $arItem["TEXT"] ?></a>
				</li>
			<? else: ?>
				<li class="mb-2 bx-link"><a class="bx-link" href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
			<? endif ?>

		<? endforeach ?>

	</ul>
<? endif ?>