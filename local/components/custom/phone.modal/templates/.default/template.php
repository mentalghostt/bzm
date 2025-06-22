<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die(); ?>

<button type="button" class="btn ps-0 pb-0" data-bs-toggle="modal"
    data-bs-target="#phoneModal"><?= $arParams['BUTTON_TEXT'] ?> <img
        src="<?= SITE_TEMPLATE_PATH ?>/assets/img/mini-phone-icon.svg"></button>

<div class="modal fade" id="phoneModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4">
            <div class="modal-header">
                <h5 class="modal-title text-black" id="phoneModalLabel"><?= $arParams['MODAL_TITLE'] ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="phoneForm">
                    <div class="mb-3">
                        <label for="phoneInput" class="form-label text-black">Номер телефона</label>
                        <input type="tel" class="form-control" id="phoneInput" required
                            placeholder="+7 999 999 99 99">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" form="phoneForm" class="container-fluid btn btn-dark">Отправить</button>
            </div>
        </div>
    </div>
</div>