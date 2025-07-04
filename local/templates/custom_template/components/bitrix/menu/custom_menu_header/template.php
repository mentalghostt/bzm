<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die(); ?>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<? if (!empty($arResult)): ?>
	<ul class="list-inline d-flex">
		<?
		foreach ($arResult as $arItem):
			if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
				continue;
			?>
			<? if ($arItem["SELECTED"]): ?>
				<li class="list-inline-item"><a class="header-menu-link" href="<?= $arItem["LINK"] ?>"
						class="selected"><?= $arItem["TEXT"] ?></a></li>
			<? else: ?>
				<li class="list-inline-item"><a class="header-menu-link"
						href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
			<? endif ?>

		<? endforeach ?>
	</ul>
<? endif ?>