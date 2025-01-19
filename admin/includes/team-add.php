<div class="page-title">
    <i class="fa-solid fa-puzzle-piece"></i> <span>لوحة التحكم /</span> <strong>اضافة موظف </strong>
</div>
<form action="functions/add_team.php" method="post" enctype="multipart/form-data">
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
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <label for="" style="padding: 0px;border:none !important">اسم الموظف</label>
    <input type="text" name="employee_name" placeholder="ادخل اسم الموظف"  required>
    <label for="" style="padding: 0px;border:none !important">الوظيفه</label>
    <input type="text" name="employee_job" placeholder="ادخل اسم الوظيفه"  required>
    <label for="" style="padding: 0px;border:none !important">وجهة نظره</label>
    <textarea type="text" name="employee_qout" placeholder="ادخل وجهة نظره"></textarea>
    <div class="file-box">
        <div class="layer">
            <div class="child">
                <p>upload image</p>
                <span>or</span>
                <span>drop image</span>
            </div>
        </div>
        <input type="file" name="employee_image">
    </div>





    <button>حفظ التعديلات</button>
</form>