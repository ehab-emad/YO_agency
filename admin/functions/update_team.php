<?php
require "connect.php";

// التحقق من وجود البيانات المطلوبة
if (isset($_POST['id'], $_POST['employee_name'], $_POST['employee_job'], $_POST['employee_qout'])) {
    $id = $_POST['id'];
    $employee_name = $_POST['employee_name'];
    $employee_job = $_POST['employee_job'];
    $employee_qout = $_POST['employee_qout'];

    // استرجاع اسم الصورة القديمة من قاعدة البيانات
    $stmt = $connect->prepare("SELECT `img` FROM `team` WHERE `id` = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $old_img = $row['img'];
    $stmt->close();

    // التحقق من وجود صورة جديدة
    if (isset($_FILES['employee_image']) && $_FILES['employee_image']['error'] == 0) {
        $employee_image = $_FILES['employee_image']['name'];
        $extentions = array("jpg", "png", "jfif", "gif", "jpeg", "webp", "avif");
        $image_ex = pathinfo($employee_image, PATHINFO_EXTENSION);

        if (in_array($image_ex, $extentions)) {

            if ($_FILES['employee_image']['size'] <= 1000000) {
                $new_img = md5(uniqid()) . "." . $image_ex;

                // نقل الصورة إلى المجلد المطلوب
                if (move_uploaded_file($_FILES['employee_image']['tmp_name'], "../../imgs/" . $new_img)) {

                    // حذف الصورة القديمة من المجلد إذا كانت موجودة
                    if (!empty($old_img) && file_exists("../../imgs/" . $old_img)) {
                        unlink("../../imgs/" . $old_img);
                    }

                    // تحديث السجل في قاعدة البيانات مع الصورة الجديدة
                    $stmt = $connect->prepare("UPDATE `team` SET `name` = ?, `img` = ?, `job` = ?, `qout` = ? WHERE `id` = ?");
                    $stmt->bind_param("ssssi", $employee_name, $new_img, $employee_job, $employee_qout, $id);
                } else {
                    header("Location: ../?page=updateservice&id=$id&error=upload_fail");
                    exit();
                }
            } else {
                header("Location: ../?page=updateservice&id=$id&error=file_too_large");
                exit();
            }
        } else {
            header("Location: ../?page=updateservice&id=$id&error=invalid_format");
            exit();
        }
    } else {
        // لا توجد صورة جديدة، فقط تحديث البيانات الأخرى
        $stmt = $connect->prepare("UPDATE `team` SET `name` = ?, `job` = ?, `qout` = ? WHERE `id` = ?");
        $stmt->bind_param("sssi", $employee_name, $employee_job, $employee_qout, $id);
    }

    // تنفيذ الاستعلام
    if ($stmt->execute()) {
        header("Location: ../?page=team");
        exit(); // إيقاف تنفيذ السكربت بعد إعادة التوجيه
    } else {
        header("Location: ../?page=updateservice&id=$id&error=update_fail");
        exit();
    }

    $stmt->close();
} else {
    header("Location: ../?page=updateteam&id=$id&error=missing_data");
    exit();
}
