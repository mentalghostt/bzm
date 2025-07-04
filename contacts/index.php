<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

<div class="row px-md-3 px-2 g-3 pb-5">
	<div class="col-lg-3 col-sm-12">
		<section class="footer-phone-section">
			<a class="text-decoration-none" href="tel:+7(495)790 44 11">
				<h4 class="mb-0 orange-text">+7 (495) 790 44 11</h4>
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
		<section class="footer-mail-section">
			<a class="text-decoration-none" href="mailto:mrvd@bzmr.ru">
				<h3 class="orange-text">mrvd@bzmr.ru</h3>
			</a>
			<p class="color-grey-700">Для вопросов и предложений</p>
		</section>
		<section class="footer-office-section">
			<h6>Центральный офис</h6>
			<p class="color-grey-700">г. Москва, 121596 г. Москва, вн. тер. г. муниципальный округ Можайский,
				ул. Толбухина, д.
				10,
				корп. 2, пом. 1, комн. 5</p>
		</section>
		<section class="footer-officetime-section">
			<h6>График работы центрального офиса</h6>
			<p class="color-grey-700">пн.-пт.: с 9:00 до 18:00</p>
		</section>
		<section class="footer-zavodtime-section">
			<h6>График работы производства</h6>
			<p class="color-grey-700">пн.-пт.: с 8:00 до 16:30</p>
		</section>
		<a target="_blank" href="<?= SITE_SERVER_NAME ?>/upload/docs/details.pdf"
			class="btn btn-dark text-button-white mt-3" download><img
				src="<?= SITE_TEMPLATE_PATH ?>/assets/img/doc-icon.png"> Скачать реквизиты</a>
	</div>
	<div class="col-lg-9">
		<iframe class="rounded-4 map mt-4 mt-md-0"
			src="https://yandex.ru/map-widget/v1/?um=constructor%3A4716449409ad006c2958e7ec1548fb42c5137c05260d02b58a3fa84a71fbc33e&amp;source=constructor">
		</iframe>
	</div>
</div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>