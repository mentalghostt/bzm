<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php"); ?>

<h1>404</h1>
<h3>Такой страницы нет</h3>

<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>