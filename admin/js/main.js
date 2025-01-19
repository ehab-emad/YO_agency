$(document).ready(function () {
    $('.file-box input').on('change', function () {
        var fileName = $(this).val().split('\\').pop(); // الحصول على اسم الملف فقط
        $('.file-box .layer').find('.child').html('<p>' + fileName + '</p>');
    });
});


setTimeout(function(){
    $(".success-message").slideUp();
    $(".error-message").slideUp();
},3000)