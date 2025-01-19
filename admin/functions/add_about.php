<?php
require "connect.php";

// تعيين id الثابت
$id = 1;

// التحقق من وجود البيانات المطلوبة
if (isset(
    $_POST['box1_main_title'],
    $_POST['box1_point1'],
    $_POST['box1_point2'],
    $_POST['box2_main_title'],
    $_POST['box2_point1'],
    $_POST['box2_point2'],
    $_POST['box3_main_title'],
    $_POST['box3_sub_title1'],
    $_POST['box3_point1'],
    $_POST['box3_sub_title2'],
    $_POST['box3_point2'],
    $_POST['box3_sub_title3'],
    $_POST['box3_point3'],
    $_POST['box3_sub_title4'],
    $_POST['box3_point4']
)) {
    // تخزين القيم في المتغيرات
    $box1_main_title = $_POST['box1_main_title'];
    $box1_point1 = $_POST['box1_point1'];
    $box1_point2 = $_POST['box1_point2'];
    $box2_main_title = $_POST['box2_main_title'];
    $box2_point1 = $_POST['box2_point1'];
    $box2_point2 = $_POST['box2_point2'];
    $box3_main_title = $_POST['box3_main_title'];
    $box3_sub_title1 = $_POST['box3_sub_title1'];
    $box3_point1 = $_POST['box3_point1'];
    $box3_sub_title2 = $_POST['box3_sub_title2'];
    $box3_point2 = $_POST['box3_point2'];
    $box3_sub_title3 = $_POST['box3_sub_title3'];
    $box3_point3 = $_POST['box3_point3'];
    $box3_sub_title4 = $_POST['box3_sub_title4'];
    $box3_point4 = $_POST['box3_point4'];

    // استرجاع اسم الصورة القديمة من قاعدة البيانات
    $stmt = $connect->prepare("SELECT `img` FROM `about` WHERE `id` = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $old_img = $row['img'];
    $stmt->close();

    // التحقق من وجود صورة جديدة
    if (isset($_FILES['about_image']) && $_FILES['about_image']['error'] == 0) {
        $about_image = $_FILES['about_image']['name'];
        $extentions = array("jpg", "png", "jfif", "gif", "jpeg", "webp", "avif");
        $image_ex = pathinfo($about_image, PATHINFO_EXTENSION);

        if (in_array($image_ex, $extentions)) {
            if ($_FILES['about_image']['size'] <= 1000000) {
                $new_img = md5(uniqid()) . "." . $image_ex;

                // نقل الصورة إلى المجلد المطلوب
                if (move_uploaded_file($_FILES['about_image']['tmp_name'], "../../imgs/" . $new_img)) {
                    // حذف الصورة القديمة من المجلد إذا كانت موجودة
                    if (!empty($old_img) && file_exists("../../imgs/" . $old_img)) {
                        unlink("../../imgs/" . $old_img);
                    }

                    // تحديث السجل في قاعدة البيانات مع الصورة الجديدة
                    $stmt = $connect->prepare("UPDATE `about` SET 
                        `b1m_title` = ?, 
                        `b1_point1` = ?, 
                        `b1_point2` = ?, 
                        `b2m_title` = ?, 
                        `b2_point1` = ?, 
                        `b2_point2` = ?, 
                        `b3m_title` = ?, 
                        `b3s_title1` = ?, 
                        `b3_point1` = ?, 
                        `b3s_title2` = ?, 
                        `b3_point2` = ?, 
                        `b3s_title3` = ?, 
                        `b3_point3` = ?, 
                        `b3s_title4` = ?, 
                        `b3_point4` = ?, 
                        `img` = ? 
                        WHERE `id` = ?");
                    $stmt->bind_param(
                        "ssssssssssssssssi",
                        $box1_main_title,
                        $box1_point1,
                        $box1_point2,
                        $box2_main_title,
                        $box2_point1,
                        $box2_point2,
                        $box3_main_title,
                        $box3_sub_title1,
                        $box3_point1,
                        $box3_sub_title2,
                        $box3_point2,
                        $box3_sub_title3,
                        $box3_point3,
                        $box3_sub_title4,
                        $box3_point4,
                        $new_img,
                        $id
                    );
                } else {
                    header("Location: ../index.php?page=about&error=upload_fail");
                    exit();
                }
            } else {
                header("Location: ../index.php?page=about&error=file_too_large");
                exit();
            }
        } else {
            header("Location: ../index.php?page=about&error=invalid_format");
            exit();
        }
    } else {
        // لا توجد صورة جديدة، فقط تحديث البيانات الأخرى
        $stmt = $connect->prepare("UPDATE `about` SET 
            `b1m_title` = ?, 
            `b1_point1` = ?, 
            `b1_point2` = ?, 
            `b2m_title` = ?, 
            `b2_point1` = ?, 
            `b2_point2` = ?, 
            `b3m_title` = ?, 
            `b3s_title1` = ?, 
            `b3_point1` = ?, 
            `b3s_title2` = ?, 
            `b3_point2` = ?, 
            `b3s_title3` = ?, 
            `b3_point3` = ?, 
            `b3s_title4` = ?, 
            `b3_point4` = ? 
            WHERE `id` = ?");
        $stmt->bind_param(
            "sssssssssssssssi",
            $box1_main_title,
            $box1_point1,
            $box1_point2,
            $box2_main_title,
            $box2_point1,
            $box2_point2,
            $box3_main_title,
            $box3_sub_title1,
            $box3_point1,
            $box3_sub_title2,
            $box3_point2,
            $box3_sub_title3,
            $box3_point3,
            $box3_sub_title4,
            $box3_point4,
            $id
        );
    }

    // تنفيذ الاستعلام
    if ($stmt->execute()) {
        header("Location: ../index.php?page=about&success=1");
        exit(); // إيقاف تنفيذ السكربت بعد إعادة التوجيه
    } else {
        header("Location: ../index.php?page=about&error=update_fail");
        exit();
    }

    $stmt->close();
} else {
    header("Location: ../index.php?page=about&error=missing_data");
    exit();
}
