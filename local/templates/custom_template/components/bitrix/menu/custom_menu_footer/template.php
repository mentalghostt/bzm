<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die(); ?>

<? if (!empty($arResult)): ?>
	<ul class="list-unstyled">

		<?
		foreach ($arResult as $arItem):
			if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
				continue;
			?>
			<? if ($arItem["SELECTED"]): ?>
				<li style="padding: 0 0 12px"><a href="<?= $arItem["LINK"] ?>" class="selected"><h6><?= $arItem["TEXT"] ?></h6></a></li>
			<? else: ?>
				<li style="padding: 0 0 12px"><a href="<?= $arItem["LINK"] ?>"><h6><?= $arItem["TEXT"] ?></h6></a></li>
			<? endif ?>

		<? endforeach ?>

	</ul>
<? endif ?>