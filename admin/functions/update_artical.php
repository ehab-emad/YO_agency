<?php
require "connect.php";

// التحقق من وجود البيانات المطلوبة
if (isset($_POST['id'], $_POST['art_name'], $_POST['art_description'])) {
    $id = $_POST['id'];
    $art_name = $_POST['art_name'];
    $art_description = $_POST['art_description'];

    // استرجاع اسم الصورة القديمة من قاعدة البيانات
    $stmt = $connect->prepare("SELECT `img` FROM `artical` WHERE `id` = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $old_img = $row['img'];
    $stmt->close();

    // التحقق من وجود صورة جديدة
    if (isset($_FILES['art_image']) && $_FILES['art_image']['error'] == 0) {
        $art_image = $_FILES['art_image']['name'];
        $extentions = array("jpg", "png", "jfif", "gif", "jpeg", "webp", "avif");
        $image_ex = pathinfo($art_image, PATHINFO_EXTENSION);

        if (in_array($image_ex, $extentions)) {

            if ($_FILES['art_image']['size'] <= 1000000) {
                $new_img = md5(uniqid()) . "." . $image_ex;

                // نقل الصورة إلى المجلد المطلوب
                if (move_uploaded_file($_FILES['art_image']['tmp_name'], "../../imgs/" . $new_img)) {

                    // حذف الصورة القديمة من المجلد إذا كانت موجودة
                    if (!empty($old_img) && file_exists("../../imgs/" . $old_img)) {
                        unlink("../../imgs/" . $old_img);
                    }

                    // تحديث السجل في قاعدة البيانات مع الصورة الجديدة
                    $stmt = $connect->prepare("UPDATE `artical` SET `img` = ?, `art_name` = ?, `art_description` = ? WHERE `id` = ?");
                    $stmt->bind_param("sssi", $new_img, $art_name, $art_description, $id);
                } else {
                    header("Location: ../?page=updateartical&id=$id&error=upload_fail");
                    exit();
                }
            } else {
                header("Location: ../?page=updateartical&id=$id&error=file_too_large");
                exit();
            }
        } else {
            header("Location: ../?page=updateartical&id=$id&error=invalid_format");
            exit();
        }
    }
     else {
        // لا توجد صورة جديدة، فقط تحديث البيانات الأخرى
        $stmt = $connect->prepare("UPDATE `artical` SET `img` = ?, `art_name` = ?, `art_description` = ? WHERE `id` = ?");
        $stmt->bind_param("sssi", $new_img, $art_name, $art_description, $id);
    }

    // تنفيذ الاستعلام
    if ($stmt->execute()) {
        header("Location: ../?page=articals");
        exit(); // إيقاف تنفيذ السكربت بعد إعادة التوجيه
    } else {
        header("Location: ../?page=updateartical&id=$id&error=update_fail");
        exit();
    }

    $stmt->close();
} else {
    header("Location: ../?page=updateartical&id=$id&error=missing_data");
    exit();
}
