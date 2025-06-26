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
				<li class="mt-4"><a href="<?= $arItem["LINK"] ?>" class="selected"><h6><?= $arItem["TEXT"] ?></h6></a></li>
			<? else: ?>
				<li class="mt-4"><a href="<?= $arItem["LINK"] ?>"><h6><?= $arItem["TEXT"] ?></h6></a></li>
			<? endif ?>

		<? endforeach ?>

	</ul>
<? endif ?>