<?
require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_admin_before.php');

// Подключаем наш класс
require_once($_SERVER['DOCUMENT_ROOT'].'/local/modules/simple.admin.mail/lib/SimpleAdminMail.php');

$APPLICATION->SetTitle("Отправка письма администратору");

if ($_SERVER['REQUEST_METHOD'] == 'POST' && check_bitrix_sessid()) {
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';
    
    if ($subject && $message) {
        if (SimpleAdminMail::send($subject, $message)) {
            echo 'Письмо успешно отправлено!';
        } else {
            echo 'Ошибка: не удалось отправить письмо';
        }
    } else {
        echo 'Заполните все поля!';
    }
}

// Форма для отправки письма
?>
<form method="post" action="">
    <?=bitrix_sessid_post()?>
    <div>
        <label>Тема письма:</label>
        <input type="text" name="subject" required>
    </div>
    <div>
        <label>Сообщение:</label>
        <textarea name="message" required></textarea>
    </div>
    <button type="submit">Отправить</button>
</form>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/epilog_admin.php');