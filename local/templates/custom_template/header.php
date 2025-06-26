<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
use Bitrix\Main\Page\Asset;
?>

<!DOCTYPE html>
<html lang="ru">

<head>
	<title><? $APPLICATION->ShowTitle(); ?></title>
	<? $APPLICATION->ShowHead(); ?>
	<? Asset::getInstance()->addCss('https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css'); ?>
	<? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/template_styles.css'); ?>
	<? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/styles.css'); ?>
	<? Asset::getInstance()->addJs('https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js'); ?>
	<? Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1.0">'); ?>
	<? Asset::getInstance()->addString('<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />'); ?>
	<? Asset::getInstance()->addString('<link rel="shortcut icon" type="image/svg+xml" href="/favicon.svg" />'); ?>
	<? Asset::getInstance()->addString('<link rel="apple-touch-icon" href="/apple-touch-icon.png">'); ?>
</head>

<body>
	<div id="panel">
		<? $APPLICATION->ShowPanel(); ?>
	</div>
	<header class="header">
		<div class="d-none d-md-block">
			<nav>
				<ul class="d-flex justify-content-center align-items-center pt-3">
					<li class="list-inline-item"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/mini-mail-icon.svg"><a
							class="color-grey-700" href="mailto:mrvd@bzmr.ru"> mrvd@bzmr.ru</a></li>
					<li class="list-inline-item"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/mini-phone-icon.svg"><a
							class="color-grey-700" href="tel:+7(495)790 44 41"> +7 (495) 790 44 41</a></li>
				</ul>
			</nav>
			<hr>
			<div class="container d-flex justify-content-left pb-4">
				<a href="/" class="d-inline-block">
					<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/logo-max.svg" class="img-fluid"
						style="width: 200px; height: auto;">
				</a>
				<nav>
					<? $APPLICATION->IncludeComponent(
						"bitrix:menu",
						"custom_menu_header",
						array(
							"ALLOW_MULTI_SELECT" => "N",
							"CHILD_MENU_TYPE" => "left",
							"DELAY" => "N",
							"MAX_LEVEL" => "1",
							"MENU_CACHE_GET_VARS" => array(
							),
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_TYPE" => "N",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"ROOT_MENU_TYPE" => "header_menu",
							"USE_EXT" => "N",
							"COMPONENT_TEMPLATE" => "custom_menu_header"
						),
						false
					); ?>
				</nav>
			</div>
		</div>

		<div class="container d-block d-md-none">
			<div class="d-flex justify-content-between align-items-center py-3">
				<button class="btn p-1 border-0 bg-transparent" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu">
					<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/menu-icon.svg" alt="Меню">
				</button>

				<a href="/" class="mx-auto">
					<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/logo-min.svg" alt="Логотип">
				</a>

				<a href="tel:+74957904411" class="pe-1">
					<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/phone-icon.svg" alt="Телефон">
				</a>
			</div>
		</div>

		<div class="offcanvas offcanvas-start" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
			<div class="offcanvas-header mb-1 ms-1">
				<h4 class="offcanvas-title fw-bold" id="mobileMenuLabel">Меню</h5>
					<button type="button" class="btn pe-1 border-0 bg-transparent" data-bs-dismiss="offcanvas"
						aria-label="Закрыть"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/close-icon.svg"></button>
			</div>
			<hr class="mt-0">
			<nav class="mb-2 ms-4">
				<? $APPLICATION->IncludeComponent(
					"bitrix:menu",
					"custom_menu_mobile",
					array(
						"ALLOW_MULTI_SELECT" => "N",
						"CHILD_MENU_TYPE" => "left",
						"DELAY" => "N",
						"MAX_LEVEL" => "1",
						"MENU_CACHE_GET_VARS" => array(),
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_TYPE" => "N",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"ROOT_MENU_TYPE" => "header_menu",
						"USE_EXT" => "N",
						"COMPONENT_TEMPLATE" => "custom_menu_header"
					),
					false
				); ?>
			</nav>
			<div class="offcanvas-body mobile-menu-under">
				<div class="mt-auto ms-2">
					<ul class="list-unstyled">
						<li class="mb-3">
							<a class="bx-link" href="tel:+74951501450" class="text-decoration-none">
								<h5 class="mb-0 fw-bold">+7 (495) 150 14 50</h5>
							</a>
						</li>
						<li class="mb-3">
							<a href="mailto:info@bzm32.ru" class="text-decoration-none">
								<h5 class="mb-0 fw-bold">info@bzm32.ru</h5>
							</a>
						</li>
						<li>
							<p class="text-muted mb-0">Для вопросов и предложений</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>

	<main class="main">
		<div class="container px-4">
			<? $currentPage = $APPLICATION->GetCurPage(); ?>
			<? if ($currentPage !== SITE_DIR && $currentPage !== SITE_DIR . 'index.php' && $currentPage !== SITE_DIR . '404.php'): ?>
				<? $APPLICATION->IncludeComponent(
					"bitrix:breadcrumb",
					"custom_breadcrumb",
					array(
						"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
						"SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
						"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
					),
					false
				); ?>
				<h1 class="pt-2 fw-bold"><? $APPLICATION->ShowTitle(); ?></h1>
			<? endif; ?>