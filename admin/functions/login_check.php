<?php
session_start();
require "connect.php"; // تضمين ملف الاتصال بقاعدة البيانات

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // البحث عن المستخدم في قاعدة البيانات
    $stmt = $connect->prepare("SELECT `id`, `password` FROM `users` WHERE `username` = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();

        // التحقق من كلمة المرور
        if ($password) {
            $_SESSION['user_id'] = $id; // بدء جلسة عمل للمستخدم
            header("Location: ../index.php"); // إعادة التوجيه بعد تسجيل الدخول بنجاح
            exit();
        } else {
            $error = "كلمة المرور غير صحيحة.";
        }
    } else {
        $error = "اسم المستخدم غير موجود.";
    }

    $stmt->close();

    // إعادة التوجيه إلى صفحة تسجيل الدخول مع رسالة الخطأ
    header("Location: ../login.php?error=" . urlencode($error));
    exit();
}
