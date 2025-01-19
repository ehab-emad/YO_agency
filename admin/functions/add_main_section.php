<?php
require "connect.php";

// تعيين id الثابت
$id = 1;

// التحقق من وجود البيانات المطلوبة
if (isset($_POST['main_title'], $_POST['main_description'])) {
    $main_title = $_POST['main_title'];
    $main_description = $_POST['main_description'];

    // استرجاع اسم الصورة القديمة من قاعدة البيانات
    $stmt = $connect->prepare("SELECT `img` FROM `banner` WHERE `id` = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $old_img = $row['img'];
    $stmt->close();

    // التحقق من وجود صورة جديدة
    if (isset($_FILES['main_image']) && $_FILES['main_image']['error'] == 0) {
        $main_image = $_FILES['main_image']['name'];
        $extentions = array("jpg", "png", "jfif", "gif", "jpeg", "webp", "avif");
        $image_ex = pathinfo($main_image, PATHINFO_EXTENSION);

        if (in_array($image_ex, $extentions)) {

            if ($_FILES['main_image']['size'] <= 1000000) {
                $new_img = md5(uniqid()) . "." . $image_ex;

                // نقل الصورة إلى المجلد المطلوب
                if (move_uploaded_file($_FILES['main_image']['tmp_name'], "../../imgs/" . $new_img)) {

                    // حذف الصورة القديمة من المجلد إذا كانت موجودة
                    if (!empty($old_img) && file_exists("../../imgs/" . $old_img)) {
                        unlink("../../imgs/" . $old_img);
                    }

                    // تحديث السجل في قاعدة البيانات مع الصورة الجديدة
                    $stmt = $connect->prepare("UPDATE `banner` SET `main_title` = ?, `description` = ?, `img` = ? WHERE `id` = ?");
                    $stmt->bind_param("sssi", $main_title, $main_description, $new_img, $id);
                } else {
                    header("Location: ../index.php?page=mainbanner&error=upload_fail");
                    exit();
                }
            } else {
                header("Location: ../index.php?page=mainbanner&error=file_too_large");
                exit();
            }
        } else {
            header("Location: ../index.php?page=mainbanner&error=invalid_format");
            exit();
        }
    } else {
        // لا توجد صورة جديدة، فقط تحديث البيانات الأخرى
        $stmt = $connect->prepare("UPDATE `banner` SET `main_title` = ?, `description` = ? WHERE `id` = ?");
        $stmt->bind_param("ssi", $main_title, $main_description, $id);
    }

    // تنفيذ الاستعلام
    if ($stmt->execute()) {
        header("Location: ../index.php?page=mainbanner&success=1");
        exit(); // إيقاف تنفيذ السكربت بعد إعادة التوجيه
    } else {
        header("Location: ../index.php?page=mainbanner&error=update_fail");
        exit();
    }

    $stmt->close();
} else {
    header("Location: ../index.php?page=mainbanner&error=missing_data");
    exit();
}
