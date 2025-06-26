<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

<div class="row pt-md-4 pb-md-5 py-3">
	<div class="col-lg-4 col-sm-12 mb-4 mb-md-0">
		<section class="mb-3">
			<a href="tel:+7(495)790 44 41" class="orange-text">
				<h5>+7(495)790 44 41</h3>
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
			<a href="mailto:89067018868@bzmr.ru" class="orange-text">
				<h5>89067018868@bzmr.ru</h3>
			</a>
			<p>Для вопросов и предложений</p>
		</section>
		<section class="mb-3">
			<a href="mailto:mrvd@bzmr.ru" class="orange-text">
				<h5>mrvd@bzmr.ru</h3>
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
	<div class="col-lg-8">
		<iframe class="w-100 h-100 rounded-4"
			src="https://yandex.ru/map-widget/v1/?um=constructor%3A4716449409ad006c2958e7ec1548fb42c5137c05260d02b58a3fa84a71fbc33e&amp;source=constructor">
		</iframe>
	</div>
</div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>