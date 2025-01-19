<?php
require "connect.php"; // تضمين ملف الاتصال بقاعدة البيانات

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // التحقق من صحة كلمة المرور
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // تحديث بيانات المستخدم في قاعدة البيانات
    $stmt = $connect->prepare("UPDATE `users` SET `username` = ?, `password` = ? WHERE `id` = 1");
    $stmt->bind_param("ss", $username, $hashed_password);

    if ($stmt->execute()) {
        header("Location: ../?page=logdata&success=1"); // إعادة التوجيه بعد النجاح
        exit();
    } else {
        header("Location: ../?page=logdata.php?error=" . urlencode("حدث خطأ أثناء تحديث البيانات."));
        exit();
    }

    $stmt->close();
}
