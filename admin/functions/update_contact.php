<?php
require "connect.php";

// تعيين id الثابت
$id = 1;

// التحقق من وجود البيانات المطلوبة
if (isset($_POST['main_description'])) {
    $main_description = $_POST['main_description'];

    // تحديث النص في قاعدة البيانات
    $stmt = $connect->prepare("UPDATE `contact` SET `text` = ? WHERE `id` = ?");
    $stmt->bind_param("si", $main_description, $id);

    if ($stmt->execute()) {
        // إعادة توجيه عند النجاح
        header("Location: ../index.php?page=contact&success=1");
        exit();
    } else {
        // إعادة توجيه عند فشل التحديث
        header("Location: ../index.php?page=contact&error=update_fail");
        exit();
    }

    $stmt->close();
} else {
    // إعادة توجيه عند غياب البيانات المطلوبة
    header("Location: ../index.php?page=contact&error=missing_data");
    exit();
}
