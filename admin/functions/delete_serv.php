<?php
require "connect.php";

// التحقق من وجود المعرف (id) في طلب GET
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // استرجاع اسم الصورة المرتبطة بالخدمة من قاعدة البيانات
    $stmt = $connect->prepare("SELECT `img` FROM `services` WHERE `id` = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $image = $row['img'];
    $stmt->close();

    // حذف السجل من قاعدة البيانات
    $stmt = $connect->prepare("DELETE FROM `services` WHERE `id` = ?");
    $stmt->bind_param("i", $id);

    // التحقق من نجاح الحذف من قاعدة البيانات
    if ($stmt->execute()) {
        // التحقق من وجود الصورة في المجلد وحذفها
        if (!empty($image) && file_exists("../../imgs/" . $image)) {
            unlink("../../imgs/" . $image);
        }
        header("Location: ../?page=services");
        exit();
    } else {
        header("Location: ../?page=services?error=delete_fail");
        exit();
    }

    $stmt->close();
} else {
    header("Location: ../?page=services?error=missing_id");
    exit();
}
