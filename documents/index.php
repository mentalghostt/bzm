<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Документы");
?>

<div class="row px-2 g-3 pb-5">
	<p>Важные документы</p>
	<div class="col-md-4 col-sm-12">
		<div class="card rounded-4 border-0">
			<div class="card-body">
				<h3 class="card-title">Каталог продукции</h3>
				<p class="card-text">Основной каталог металлорукавов</p>
				<a target="_blank" href="<?= SITE_SERVER_NAME ?>/upload/docs/catalog.pdf" class="btn btn-dark text-button-white">Посмотреть каталог</a>
			</div>
		</div>
	</div>
	<div class="col-md-4 col-sm-12">
		<div class="card rounded-4 border-0">
			<div class="card-body">
				<h3 class="card-title">Буклет БЗМ</h3>
				<p class="card-text">Презентационный буклет о компании</p>
				<a target="_blank" href="<?= SITE_SERVER_NAME ?>/upload/docs/booklet.pdf" class="btn btn-dark text-button-white">Посмотреть буклет</a>
			</div>
		</div>
	</div>
	<div class="col-md-4 col-sm-12">
		<div class="card rounded-4 border-0">
			<div class="card-body">
				<h3 class="card-title">Опросный лист</h3>
				<p class="card-text">Скачайте и заполните опросный лист в формате PDF. Пришлите заполненный лист
					нам на
					почту <a href="mailto:mrvd@bzmr.ru">mrvd@bzmr.ru</a></p>
				<a href="<?= SITE_SERVER_NAME ?>/upload/docs/asklist.pdf" class="btn btn-dark text-button-white" download>Скачать опросный лист</a>
			</div>
		</div>
	</div>

</div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>