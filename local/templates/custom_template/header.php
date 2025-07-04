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
			<nav class="header-desk-upper">
				<ul class="d-flex justify-content-center align-items-center">
					<li class="list-inline-item pe-3"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/mini-mail-icon.svg"><a
							class="color-grey-700 header-desk-upper-mail" href="mailto:mrvd@bzmr.ru"> mrvd@bzmr.ru</a></li>
					<li class="list-inline-item m-0"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/mini-phone-icon.svg"><a
							class="color-grey-700 header-desk-upper-phone" href="tel:+7(495)790 44 41"> +7 (495) 790 44 41</a></li>
				</ul>
			</nav>
			<hr class="my-0">
			<div class="container d-flex justify-content-left header-desk-main">
				<a href="/" class="d-inline-block">
					<img class="header-desk-main-logo" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/logo-max.svg" class="img-fluid">
				</a>
				<nav class="header-desk-main-menu">
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
			<div class="header-mobile d-flex justify-content-between align-items-center align-items-center">
				<button class="btn border-0 bg-transparent p-0" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu">
					<img class="header-menu-button" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/menu-icon.svg">
				</button>

				<a href="/">
					<img class="header-icon-mobile" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/logo-min.svg">
				</a>

				<a href="tel:+74957904411">
					<img class="header-phone-ref" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/phone-icon.svg">
				</a>
			</div>
		</div>

		<div class="offcanvas offcanvas-start" tabindex="-1" id="mobileMenu">
			<div class="offcanvas-header">
				<h4 id="mobileMenuLabel" class="fw-bold mobile-menu-name">Меню</h5>
					<button type="button" class="btn border-0 bg-transparent p-0" data-bs-dismiss="offcanvas">
						<img class="mobile-menu-button" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/close-icon.svg"></button>
			</div>
			<hr class="my-0">
			<nav class="px-4" style="height: 158px">
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
						"ROOT_MENU_TYPE" => "mobile_menu",
						"USE_EXT" => "N",
						"COMPONENT_TEMPLATE" => "custom_menu_header"
					),
					false
				); ?>
			</nav>
			<div class="offcanvas-body mobile-menu-under px-4">
				<div>
					<ul class="list-unstyled">
						<li>
							<a href="tel:+74951501450">
								<h5 class="fw-bold" style="padding-top: 2px">+7 (495) 150 14 50</h5>
							</a>
						</li>
						<li>
							<a href="mailto:info@bzm32.ru">
								<h5 class="fw-bold" style="padding-top: 8px">info@bzm32.ru</h5>
							</a>
						</li>
						<li>
							<p class="text-muted" style="padding-top: 6px">Для вопросов и предложений</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>

	<main class="main">
		<div class="container">
			<? $currentPage = $APPLICATION->GetCurPage();
			$isNewsDetailPage = (
				strpos($currentPage, '/news/') !== false &&
				!preg_match('~/news/$~', $currentPage) &&
				!preg_match('~/news/index\.php$~', $currentPage)
			);
			$isExpluatationDetailPage = (
				strpos($currentPage, '/expluatation/') !== false &&
				!preg_match('~/expluatation/$~', $currentPage) &&
				!preg_match('~/expluatation/index\.php$~', $currentPage)
			);
			if ($currentPage !== SITE_DIR && $currentPage !== SITE_DIR . 'index.php' && $currentPage !== SITE_DIR . '404.php'): ?>
				<div class="breadcrumb-area">
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
				</div>
				<? if (!$isNewsDetailPage && !$isExpluatationDetailPage): ?>
					<h1 class="fw-bold main-heading-area"><? $APPLICATION->ShowTitle(); ?></h1>
				<? endif; ?>
			<? endif; ?>