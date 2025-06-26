<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die(); ?>

</div>
</main>

<footer class="footer text-white pt-0">
	<div class="container">
		<div class="text-center text-md-start mb-4 align-items-start mx-3">
			<a href="/"><img class="d-none d-md-block pt-5 pb-2"
					style="width: 15%" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/logo-max-white.svg">
				<img class="d-block d-md-none pt-4" style="width: 35%" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/logo-min-white.svg"></a>
		</div>
		<hr class="my-4">
		<div class="row pt-3 mx-1">
			<div class="col-md-5 mb-4 mb-md-0">
				<section class="mb-3">
					<a href="tel:+7(495)790 44 41">
						<h3 class="mb-0">+7 (495) 790 44 41</h3>
					</a>
					<? $APPLICATION->IncludeComponent(
						"custom:phone.modal",
						"",
						array(
							"BUTTON_TEXT" => "Обратный звонок",
							"MODAL_TITLE" => "Заказать обратный звонок",
							"CACHE_TIME" => "3600"
						)
					); ?>
				</section>
				<section class="mb-4">
					<a href="mailto:mrvd@bzmr.ru">
						<h3>mrvd@bzmr.ru</h3>
					</a>
					<p class="color-grey-500">Для вопросов и предложений</p>
				</section>
				<section class="mb-4">
					<h6>Центральный офис</h6>
					<p class="color-grey-500">г. Москва, 121596 г. Москва, вн. тер. г. муниципальный округ Можайский,
						ул. Толбухина, д.
						10,
						корп. 2, пом. 1, комн. 5</p>
				</section>
				<section class="mb-4">
					<h6>График работы центрального офиса</h6>
					<p class="color-grey-500">пн.-пт.: с 9:00 до 18:00</p>
				</section>
				<section class="mb-0">
					<h6>График работы производства</h6>
					<p class="color-grey-500">пн.-пт.: с 8:00 до 16:30</p>
				</section>
			</div>
			<div class="col-md-4"></div>
			<div class="col-md-3">
				<h3 class="h4 mb-4">Покупателям</h3>
				<nav>
					<? $APPLICATION->IncludeComponent(
						"bitrix:menu",
						"custom_menu_footer",
						array(
							"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
							"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
							"DELAY" => "N",	// Откладывать выполнение шаблона меню
							"MAX_LEVEL" => "1",	// Уровень вложенности меню
							"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
							"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
							"MENU_CACHE_TYPE" => "N",	// Тип кеширования
							"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
							"ROOT_MENU_TYPE" => "footer_menu",	// Тип меню для первого уровня
							"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
							"COMPONENT_TEMPLATE" => "custom_menu_footer"
						),
						false
					); ?>
				</nav>
			</div>
		</div>
		<hr class="mt-4">
		<div class="d-flex flex-column flex-md-row justify-content-end mx-3">
			<nav class="mb-3">
				<ul class="list-inline d-flex flex-column flex-md-row">
					<li class="list-inline-item my-3 mb-md-0 me-md-3">
						<a class="color-grey-500" target="_blank"
							href="<?= SITE_SERVER_NAME ?>/upload/docs/details.pdf">Реквизиты</a>
					</li>
					<li class="list-inline-item my-3 mb-md-0 me-md-3">
						<a class="color-grey-500" target="_blank"
							href="<?= SITE_SERVER_NAME ?>/upload/docs/privacy.pdf">Политика конфиденциальности</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</footer>
</body>

</html>