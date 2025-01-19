<?php
$data = $connect->query("SELECT * FROM `users`");
$data = $data->fetch_assoc();
?>

<div class="page-title">
    <i class="fa-solid fa-puzzle-piece"></i> <span>لوحة التحكم /</span> <strong>بيانات تسجيل الدخول</strong>
</div>


<div class="login-container" style="margin: auto;width:500px">

    <?php if (isset($_GET['error'])): ?>
        <p class="error-message"><?php echo htmlspecialchars($_GET['error']); ?></p>
    <?php endif; ?>

    <form action="functions/login_update.php" method="post">
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
            echo "<p class='error-message' style='width:100%'>$message</p>";
        }
        ?>
        <label for="username">اسم المستخدم</label>
        <input type="text" name="username" value="<?php echo $data['username'] ?>" required>

        <label for="password">كلمة المرور</label>
        <input type="password" name="password" placeholder="password" value="" required>

        <button type="submit">تعديل بيانات الدخول</button>
    </form>
</div>