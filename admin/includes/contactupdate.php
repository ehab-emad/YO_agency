<?php
$data = $connect->query("SELECT * FROM `contact` WHERE id='1'");
$data = $data->fetch_assoc()
?>

<div class="page-title">
    <i class="fa-solid fa-puzzle-piece"></i> <span>لوحة التحكم /</span> <strong>ضبط قسم التواصل</strong>
</div>
<form action="functions/update_contact.php" method="post" enctype="multipart/form-data">
    <?php
    if (isset($_GET['success'])) {
        echo "<p class='success-message'>تم التحديث بنجاح!</p>";
    }

    if (isset($_GET['error'])) {
        $error = $_GET['error'];
        $errorMessages = array(
            "upload_fail" => "فشل رفع الصورة. حاول مرة أخرى.",
            "file_too_large" => "حجم الملف كبير جدًا. يجب أن يكون أقل من 1 ميجابايت.",
            "invalid_format" => "تنسيق الملف غير مدعوم. يرجى رفع صورة بصيغة jpg, png, gif, jpeg أو webp.",
            "update_fail" => "فشل التحديث. حاول مرة أخرى.",
            "missing_data" => "بيانات الإدخال غير كاملة."
        );

        $message = isset($errorMessages[$error]) ? $errorMessages[$error] : "حدث خطأ غير معروف.";
        echo "<p class='error-message'>$message</p>";
    }
    ?>
    <textarea type="text" name="main_description" placeholder="الوصف الرئيسي"><?php echo $data['text'] ?></textarea>
    
    <button>حفظ التعديلات</button>
</form>