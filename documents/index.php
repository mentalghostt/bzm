<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Документы");
?>

<div class="row py-5">
	<p class="fw-bold mb-4">Важные документы</p>
	<div class="col-md-4 col-sm-12 mb-2">
		<div class="card rounded-4 border-0">
			<div class="card-body">
				<h3 class="card-title mb-3">Каталог продукции</h3>
				<p class="card-text mb-4">Основной каталог металлорукавов</p>
				<a target="_blank" href="/upload/docs/catalog.pdf" class="btn btn-dark orange-text">Посмотреть каталог</a>
			</div>
		</div>
	</div>
	<div class="col-md-4 col-sm-12 mb-2">
		<div class="card rounded-4 border-0">
			<div class="card-body">
				<h3 class="card-title mb-3">Буклет БЗМ</h3>
				<p class="card-text mb-4">Презентационный буклет о компании</p>
				<a target="_blank" href="/upload/docs/booklet.pdf" class="btn btn-dark orange-text">Посмотреть буклет</a>
			</div>
		</div>
	</div>
	<div class="col-md-4 col-sm-12 mb-2">
		<div class="card rounded-4 border-0">
			<div class="card-body">
				<h3 class="card-title mb-3">Опросный лист</h3>
				<p class="card-text mb-3">Скачайте и заполните опросный лист в формате PDF. Пришлите заполненный лист
					нам на
					почту <a href="mailto:mrvd@bzmr.ru">mrvd@bzmr.ru</a></p>
				<a href="/upload/docs/asklist.pdf" class="btn btn-dark orange-text" download>Скачать опросный лист</a>
			</div>
		</div>
	</div>

</div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>