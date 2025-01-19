<div class="page-title">
    <i class="fa-solid fa-puzzle-piece"></i> <span>لوحة التحكم /</span> <strong>اضافة كورس </strong>
</div>
<form action="functions/add_project.php" method="post" enctype="multipart/form-data">
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
    <label for="" style="padding: 0px;border:none !important">اسم الكورس</label>
    <input type="text" name="proj_name" placeholder="ادخل اسم الكورس" required>
    <label for="" style="padding: 0px;border:none !important">وصف الكورس</label>
    <textarea type="text" name="proj_description" placeholder="ادخل وصف الكورس"></textarea>
    <div class="file-box">
        <div class="layer">
            <div class="child">
                <p>upload image</p>
                <span>or</span>
                <span>drop image</span>
            </div>
        </div>
        <input type="file" name="proj_image">
    </div>





    <button>حفظ التعديلات</button>
</form>