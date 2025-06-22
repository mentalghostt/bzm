<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arComponentParameters = [
    "PARAMETERS" => [
        "BUTTON_TEXT" => [
            "NAME" => "Текст кнопки",
            "TYPE" => "STRING",
            "DEFAULT" => "Обратный звонок"
        ],
        "MODAL_TITLE" => [
            "NAME" => "Заголовок модального окна",
            "TYPE" => "STRING",
            "DEFAULT" => "Оставьте ваш телефон"
        ],
        "CACHE_TIME" => ["DEFAULT" => 3600]
    ]
];
?>