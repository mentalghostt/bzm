<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die(); ?>

</div>
</main>

<footer class="footer text-white py-4">
	<div class="container">
		<div class="text-center text-md-start mb-4 align-items-start">
			<a href="/"><img class="d-none d-md-block" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/logo-max-white.svg">
				<img class="d-block d-md-none" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/logo-min-white.svg"></a>
		</div>
		<hr class="my-4">
		<div class="row">
			<div class="col-9 mb-4 mb-md-0">
				<section class="mb-3">
					<a href="tel:+7(495)790 44 41">
						<h4>+7(495)790 44 41</h4>
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
				<section class="mb-3">
					<a href="mailto:mrvd@bzmr.ru">
						<h4>mrvd@bzmr.ru</h4>
					</a>
					<p>Для вопросов и предложений</p>
				</section>
				<section class="mb-3">
					<h5>Центральный офис</h5>
					<p>г. Москва, 121596 г. Москва, вн. тер. г. муниципальный округ Можайский, ул. Толбухина, д.
						10,
						корп. 2, пом. 1, комн. 5</p>
				</section>
				<section class="mb-3">
					<h5>График работы центрального офиса</h5>
					<p>пн.-пт.: с 9:00 до 18:00</p>
				</section>
				<section class="mb-3">
					<h5>График работы производства</h5>
					<p>пн.-пт.: с 8:00 до 16:30</p>
				</section>
			</div>
			<div class="col-md-3">
				<h3 class="h4 mb-3">Покупателям</h3>
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
		<hr class="my-4">
		<div class="d-flex flex-column flex-md-row justify-content-between align-items-centers">
			<p>&copy; 2025 Брянский завод металлорукавов.</p>
			<nav class="list-inline mb-3 mb-md-0">
				<ul class="list-inline mb-0">
					<li class="bx-link list-inline-item"><a target="_blank"
							href="<?= SITE_SERVER_NAME ?>/upload/docs/details.pdf">Реквизиты</a></li>
					<li class="bx-link list-inline-item"><a target="_blank"
							href="<?= SITE_SERVER_NAME ?>/upload/docs/privacy.pdf">Политика конфиденциальности</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</footer>
</body>

</html>