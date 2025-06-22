
; /* Start:"a:4:{s:4:"full";s:79:"/local/components/custom/phone.modal/templates/.default/script.js?1750550009779";s:6:"source";s:65:"/local/components/custom/phone.modal/templates/.default/script.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
document.addEventListener('DOMContentLoaded', function() {
    const phoneForm = document.getElementById('phoneForm');
    
    if (phoneForm) {
        phoneForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const phoneInput = document.getElementById('phoneInput');
            const phoneNumber = phoneInput.value;
            
            console.log('Отправлен номер:', phoneNumber);
            
            const modal = bootstrap.Modal.getInstance(document.getElementById('phoneModal'));
            modal.hide();
            
            phoneInput.value = '';
            
            alert('Спасибо! Ваш номер ' + phoneNumber + ' принят!');
        });
    }
});
/* End */
;; /* /local/components/custom/phone.modal/templates/.default/script.js?1750550009779*/
