<?php
require "connect.php";

// التحقق من وجود البيانات المطلوبة
if (isset($_POST['serv_name'], $_POST['serv_description'])) {
    $serv_name = $_POST['serv_name'];
    $serv_description = $_POST['serv_description'];

    // التحقق من وجود صورة مرفوعة
    if (isset($_FILES['serv_image']) && $_FILES['serv_image']['error'] == 0) {
        $serv_image = $_FILES['serv_image']['name'];
        $extentions = array("jpg", "png", "jfif", "gif", "jpeg", "webp", "avif");
        $image_ex = pathinfo($serv_image, PATHINFO_EXTENSION);

        if (in_array($image_ex, $extentions)) {
            if ($_FILES['serv_image']['size'] <= 1000000) {
                $new_img = md5(uniqid()) . "." . $image_ex;

                // نقل الصورة إلى المجلد المطلوب
                if (move_uploaded_file($_FILES['serv_image']['tmp_name'], "../../imgs/" . $new_img)) {

                    // إدخال السجل الجديد في قاعدة البيانات مع الصورة
                    $stmt = $connect->prepare("INSERT INTO `services`(`img`, `serv_name`, `serv_description`) VALUES (?, ?, ?)");
                    $stmt->bind_param("sss", $new_img, $serv_name, $serv_description);

                    // تنفيذ الاستعلام
                    if ($stmt->execute()) {
                        header("Location: ../?page=services");
                        exit(); // إيقاف تنفيذ السكربت بعد إعادة التوجيه
                    } else {
                        header("Location: ../?page=addservice&error=update_fail");
                        exit();
                    }
                } else {
                    header("Location: ../?page=addservice&error=upload_fail");
                    exit();
                }
            } else {
                header("Location: ../?page=addservice&error=file_too_large");
                exit();
            }
        } else {
            header("Location: ../?page=addservice&error=invalid_format");
            exit();
        }
    } else {
        // إذا لم يتم رفع صورة، إرجاع خطأ
        header("Location: ../?page=addservice&error=missing_image");
        exit();
    }

    $stmt->close();
} else {
    header("Location: ../?page=addservice&error=missing_data");
    exit();
}
