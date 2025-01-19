<?php
require "connect.php";

// التحقق من وجود البيانات المطلوبة
if (isset($_POST['employee_name'], $_POST['employee_job'], $_POST['employee_qout'])) {
    $employee_name = $_POST['employee_name'];
    $employee_job = $_POST['employee_job'];
    $employee_qout = $_POST['employee_qout'];

    // التحقق من وجود صورة
    if (isset($_FILES['employee_image']) && $_FILES['employee_image']['error'] == 0) {
        $employee_image = $_FILES['employee_image']['name'];
        $extentions = array("jpg", "png", "jfif", "gif", "jpeg", "webp", "avif");
        $image_ex = pathinfo($employee_image, PATHINFO_EXTENSION);

        if (in_array($image_ex, $extentions)) {
            if ($_FILES['employee_image']['size'] <= 1000000) {
                $new_img = md5(uniqid()) . "." . $image_ex;

                // نقل الصورة إلى المجلد المطلوب
                if (move_uploaded_file($_FILES['employee_image']['tmp_name'], "../../imgs/" . $new_img)) {
                    // إدراج البيانات في قاعدة البيانات مع الصورة الجديدة
                    $stmt = $connect->prepare("INSERT INTO `team` (`name`, `img`, `job`, `qout`) VALUES (?, ?, ?, ?)");
                    $stmt->bind_param("ssss", $employee_name, $new_img, $employee_job, $employee_qout);
                } else {
                    header("Location: ../?page=addteam&error=upload_fail");
                    exit();
                }
            } else {
                header("Location: ../?page=addteam&error=file_too_large");
                exit();
            }
        } else {
            header("Location: ../?page=addteam&error=invalid_format");
            exit();
        }
    } else {
        header("Location: ../?page=addteam&error=missing_image");
        exit();
    }

    // تنفيذ الاستعلام
    if (isset($stmt) && $stmt->execute()) {
        header("Location: ../?page=team&success=1");
        exit(); // إيقاف تنفيذ السكربت بعد إعادة التوجيه
    } else {
        header("Location: ../?page=addteam&error=insert_fail");
        exit();
    }

    if (isset($stmt)) {
        $stmt->close();
    }
} else {
    header("Location: ../?page=addteam&error=missing_data");
    exit();
}
