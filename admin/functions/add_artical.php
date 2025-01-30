<?php
require "connect.php";

// التحقق من وجود البيانات المطلوبة
if (isset($_POST['art_name'], $_POST['art_description'])) {
    $art_name = $_POST['art_name'];
    $art_description = $_POST['art_description'];

    // التحقق من وجود صورة مرفوعة
    if (isset($_FILES['art_image']) && $_FILES['art_image']['error'] == 0) {
        $art_image = $_FILES['art_image']['name'];
        $extentions = array("jpg", "png", "jfif", "gif", "jpeg", "webp", "avif");
        $image_ex = pathinfo($art_image, PATHINFO_EXTENSION);

        if (in_array($image_ex, $extentions)) {
            if ($_FILES['art_image']['size'] <= 1000000) {
                $new_img = md5(uniqid()) . "." . $image_ex;

                // نقل الصورة إلى المجلد المطلوب
                if (move_uploaded_file($_FILES['art_image']['tmp_name'], "../../imgs/" . $new_img)) {

                    // إدخال السجل الجديد في قاعدة البيانات مع الصورة
                    $stmt = $connect->prepare("INSERT INTO `artical`(`img`, `art_name`, `art_description`) VALUES (?, ?, ?)");
                    $stmt->bind_param("sss", $new_img, $art_name, $art_description);

                    // تنفيذ الاستعلام
                    if ($stmt->execute()) {
                        header("Location: ../?page=articals");
                        exit(); // إيقاف تنفيذ السكربت بعد إعادة التوجيه
                    } else {
                        header("Location: ../?page=addartical&error=update_fail");
                        exit();
                    }
                } else {
                    header("Location: ../?page=addartical&error=upload_fail");
                    exit();
                }
            } else {
                header("Location: ../?page=addartical&error=file_too_large");
                exit();
            }
        } else {
            header("Location: ../?page=addartical&error=invalid_format");
            exit();
        }
    } else {
        // إذا لم يتم رفع صورة، إرجاع خطأ
        header("Location: ../?page=addartical&error=missing_image");
        exit();
    }

    $stmt->close();
} else {
    header("Location: ../?page=addartical&error=missing_data");
    exit();
}
