<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die(); ?>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<? if (!empty($arResult)): ?>
	<ul class="list-inline header-menu mb-0 d-flex align-items-end">

		<?
		foreach ($arResult as $arItem):
			if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
				continue;
			?>
			<? if ($arItem["SELECTED"]): ?>
				<li class="mb-2 list-inline-item d-flex align-items-center"><a class="bx-link fw-bold" href="<?= $arItem["LINK"] ?>"
						class="selected"><?= $arItem["TEXT"] ?></a></li>
			<? else: ?>
				<li class="mb-2 list-inline-item d-flex align-items-center"><a class="bx-link fw-bold"
						href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
			<? endif ?>

		<? endforeach ?>

	</ul>
<? endif ?>