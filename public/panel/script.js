document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('mainForm');
    const alertBox = document.getElementById('alertBox');

    form.addEventListener('submit', function (event) {
        // جلوگیری از ارسال اگر فیلدها خالی یا اشتباه باشند
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();

            // نمایش پیام خطا
            showAlert('لطفاً تمامی فیلدها را به درستی پر کنید.', 'alert-danger');
        } else {
            event.preventDefault(); // جلوگیری از رفرش صفحه برای مشاهده نتیجه

            const name = document.getElementById('userName').value;
            showAlert(`${name} عزیز، فرم شما با موفقیت ثبت شد.`, 'alert-success');

            // در صورت تمایل فرم را پاک کنید:
            // form.reset();
            // form.classList.remove('was-validated');
        }

        form.classList.add('was-validated');
    }, false);

    // تابع کمکی برای نمایش پیام‌ها
    function showAlert(message, type) {
        alertBox.textContent = message;
        alertBox.className = `mt-3 alert ${type}`;
        alertBox.classList.remove('d-none');
    }
});
