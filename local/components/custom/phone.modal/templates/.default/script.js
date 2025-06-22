document.addEventListener('DOMContentLoaded', function() {
    const phoneForm = document.getElementById('phoneForm');
    
    if (phoneForm) {
        phoneForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const phoneInput = document.getElementById('phoneInput');
            const phoneNumber = phoneInput.value.trim();
            
            if (phoneNumber.length < 10) {
                alert('Пожалуйста, введите корректный номер телефона');
                return;
            }
            console.log('Отправлен номер:', phoneNumber);
            const formData = new FormData();
            formData.append('phone', phoneNumber);
            formData.append('timestamp', new Date().toISOString());
            fetch('/phone_handler.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Ошибка сети');
                }
                return response.text();
            })
            .then(data => {
                console.log('Успешно отправлено:', data);
                const modal = bootstrap.Modal.getInstance(document.getElementById('phoneModal'));
                if (modal) {
                    modal.hide();
                }
                phoneInput.value = '';
                alert('Спасибо! Ваш номер ' + phoneNumber + ' принят!');
            })
            .catch(error => {
                console.error('Ошибка:', error);
                alert('Произошла ошибка при отправке. Пожалуйста, попробуйте позже.');
            });
        });
    }
});